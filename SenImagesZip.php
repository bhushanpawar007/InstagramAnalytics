<?php
ini_set('max_execution_time', 300);  //300 seconds = 5 minutes
//$imagesCount = 'https://api.instagram.com/v1/tags/' .$_GET["tagname"]. '?access_token=1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa';

  //          $json = (file_get_contents($imagesCount));
    //        $MyImages = json_decode($json);
      //       $Image_Count=$MyImages->data->media_count;
          //  $countofRecentMedia = count($MyMediaData->data);
           // $TotaLikes = 0;
           // $TotalComments = 0;
$images='https://api.instagram.com/v1/tags/' .$_GET["tagname"]. '/media/recent?access_token=1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa';
  

$json = (file_get_contents($images));
            $MyImagesZip = json_decode($json);
//
$zip = new ZipArchive();
//
# create a temp file & open it
$tmp_file = tempnam('.', '');
$zip->open($tmp_file, ZipArchive::CREATE);

  //echo $Image_Count;  
  
   $Actual_Image_Count= count($MyImagesZip->data);
   

//->images->thumbnail->url
for ($i=0;$i<$Actual_Image_Count;$i++)
{
   //$download_file=$MyImagesZip->data[$i]->images->thumbnail->url;
  // echo $MyImagesZip->data[$i]->images->thumbnail->url;
   $zip->addFromString(basename('temp' .$i .'.jpg'), file_get_contents($MyImagesZip->data[$i]->images->thumbnail->url));
}

# create new zip object


# loop through each file
//foreach ($files as $file) {
//    # download file
//    $download_file = file_get_contents($file);
//
//    #add it to the zip
//    $zip->addFromString(basename($file), $download_file);
//}

# close zip
$zip->close();

# send the file to the browser as a download
header('Content-disposition: attachment; filename="my file.zip"');
header('Content-type: application/zip');
readfile($tmp_file);
unlink($tmp_file);
