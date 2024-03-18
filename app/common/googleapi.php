<?php
    require $_SERVER['DOCUMENT_ROOT']. '/vendor/autoload.php';

    use Google\Client as Google_Client;
    use Google\Service\Drive;

    class GoogleDriveUploader {
        private $client;

        public function __construct() {
            $this->client = new Google_Client();
            $this->client->setApplicationName('portfolio');
            $this->client->setScopes([Drive::DRIVE]);
            $this->client->setAuthConfig($_SERVER['DOCUMENT_ROOT']."/app/common/credentials.json");
        }

        public function uploadImage($imagePath) {
            $driveService = new Google_Service_Drive($this->client);

            // 現在の日時を使用してイメージ名を作成
            $currentDateTime = date('YmdHis');
            $imageName = $currentDateTime . '_' . uniqid() . '.jpg';

            $fileMetadata = new Google_Service_Drive_DriveFile([
                'name' => $imageName,
            ]);
            $context = stream_context_create([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ]
            ]);
            $content = file_get_contents($imagePath, false, $context);
            $file = $driveService->files->create($fileMetadata, [
                'data' => $content,
                'mimeType' => 'image/jpeg',
                'uploadType' => 'multipart',
            ]);

            return $file->id;
        }
    }