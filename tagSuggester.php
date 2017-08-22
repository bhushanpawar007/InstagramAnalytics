<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <body background="1.jpg" style="color: #fff">
        <?php include 'header.php'; ?>
        <h1 class="text-center">Welcome To Instagram Tag Suggester Engine</h1>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="container" style="width: 50%; float:left; padding-left:15% ; text-align:center">

            <table class="table table-bordered"  >

                <tr>
                    <td><h2> You Have Used Below tags In the Post </h2></td>

                </tr>

                <tr>
                    <td> 
                        <?php
                        set_time_limit(300);

                        $mediaId = $_GET['media_id'];
                        $media = 'https://api.instagram.com/v1/media/' . $mediaId . '?access_token=' . $_SESSION['access_token'];
                        $MyjsonData = json_decode((file_get_contents($media)));
                        $tag_count = count($MyjsonData->data->tags);
                        $i = 0;
                        echo "<h4>";
                        while ($i < $tag_count) {
                            echo "#" . $MyjsonData->data->tags[$i] . "\t";
                            $i++;
                        }
                        echo "</h4>";
                        ?>

                    </td>

                </tr>
                </tbody>
            </table>
        </div>

        <div class="container" style="width: 50%; float:right; padding-right:15% ; text-align:center">

            <table class="table table-bordered"  >

                <tr>
                    <td><h2>Please Use Below Suggested Tags To <b>Improve Likes </b></h2>
                    </td>

                </tr>
                <tr>
                    <td>
                        <?php
                        $i = 0;
                        $tagArray = array();
                        echo "<h4>";
                        while ($i < $tag_count) {
                            $tag = (string) $MyjsonData->data->tags[$i];
                            $tagSearch = 'https://api.instagram.com/v1/tags/search?q=' . $tag . '&access_token=' . $_SESSION['access_token'];
                            $MyTagData = json_decode((file_get_contents($tagSearch)));
                            $tagCount = count($MyTagData->data);

                            for ($j = 0; $j < $tagCount; $j++) {
                                array_push($tagArray, $MyTagData->data[$j]->name, $MyTagData->data[$j]->media_count);
                                echo $tagArray[$j][0];
                                echo $tagArray[$j][1];
                            }

//                        if ($tagCount >2) {
//                            echo "#" . $MyTagData->data[0]->name. "\t";
//                            echo "#" . $MyTagData->data[1]->name. "\t";
//                            echo "#" . $MyTagData->data[2]->name. "\t";
//                        }
//                        else if ($tagCount >1) {
//                            echo "#" . $MyTagData->data[0]->name. "\t";
//                            echo "#" . $MyTagData->data[1]->name. "\t";
//                        }
//                        else {
//                         echo "#" . $MyTagData->data[0]->name . "\t"; 
//                        }
//                        $i++;
                        }
                        $tagCount . asort($tagArray);

                        $k = 0;
                        while ($k < count($tagArray)) {

                            echo $tagArray['name'];
                            echo $tagArray['media_count'];
                            $k++;
                        }
                        echo "</h4>";
                        ?>
                    </td>
                </tr>

            </table>
        </div>

    </body>
</html>