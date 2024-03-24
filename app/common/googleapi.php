<?php

    require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

    use Google\Client as Google_Client;
    use Google\Service\Drive;
    use Google\Service\Drive\DriveFile;

    class GoogleDriveUploader {
        private $client;
        private $credentialsPath;

        public function __construct() {
            $this->credentialsPath = $_SERVER['DOCUMENT_ROOT'] . "/app/common/credentials.json";
            $this->client = new Google_Client();
            $this->client->setAuthConfig($this->credentialsPath);
            $this->client->addScope(Drive::DRIVE);
        }

        private function getMimeType($filePath) {
            $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = finfo_file($fileInfo, $filePath);
            finfo_close($fileInfo);
            return $mimeType;
        }

        public function uploadImage($imagePath,$imageName) {
            $driveService = new Drive($this->client);
            $extension = pathinfo($imageName, PATHINFO_EXTENSION);
            $currentDateTime = date('YmdHis');
            $imageName = $currentDateTime . '_' . uniqid() .".". $extension;
        
            $portfolioFolderId = '1uNVd81cFrmRn4RmRoFql3PQuR-1bIJ16';
        
            $fileMetadata = new DriveFile([
                'name' => $imageName, 
                'parents' => [$portfolioFolderId], 
            ]);
        
            $context = stream_context_create([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ]
            ]);
            
            $content = file_get_contents($imagePath, false, $context);
        
            $mimeType = $this->getMimeType($imagePath);
            
            $file = $driveService->files->create($fileMetadata, [
                'data' => $content,
                'mimeType' => $mimeType,
                'uploadType' => 'multipart',
                'fields' => 'id'
            ]);
        
            // ファイルのアップロードに成功したら、そのファイルのIDを取得する
            $fileId = $file->id;
        
            // 画像のURLを構築する
            $imageUrl = "https://lh3.googleusercontent.com/d/" . $fileId;
            
            // 共有リンクを取得する
            $permission = new Google_Service_Drive_Permission([
                'type' => 'anyone',
                'role' => 'reader',
            ]);
            $driveService->permissions->create($fileId, $permission, ['fields' => 'id']);
        
            // 共有リンクを取得する
            $file = $driveService->files->get($fileId, ['fields' => 'webViewLink']);
            $sharedLink = $file->webViewLink;
            
            return $imageUrl;
        }
        
    }  
