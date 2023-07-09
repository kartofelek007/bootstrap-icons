<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Icons</title>
    <link rel="icon" href="./favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.min.css?v=3">
</head>
<body>
    <div class="header">
        <a href="http://bootstrap-icons.click/" class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path></svg>
        </a>

        <input type="text" class="input-filter" placeholder="Enter icon name" id="inputFilter" disabled>

        <div id="colorPicker" class="input-color-picker">
            <div id="colorPickerInside" class="input-color-picker-inside"><div></div></div>
        </div>

        <button id="favorite" class="btn-favorite" disabled>
            <svg class="btn-favorite-inactive" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
            </svg>
            <svg class="btn-favorite-active" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
            </svg>
        </button>

        <button class="btn-help">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path>
            </svg>
        </button>

        <button id="toggleNames" class="btn-toggle-layout">
            <svg class="btn-toggle-layout-small" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
            </svg>
            <svg class="btn-toggle-layout-big" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
            </svg>
        </button>
    </div>
    <div class="icon-list">
        <?php
        function dirToArray($dir) {
            $result = array();
            $cdir = scandir($dir);
            foreach ($cdir as $key => $value)
            {
               if (!in_array($value,array(".","..")))
               {
                  if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
                  {
                     $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                  }
                  else
                  {
                     $result[] = $value;
                  }
               }
            }

            return $result;
        }

        $files = dirToArray("./icons");
        foreach ($files as $file) {
            $data = file_get_contents("./icons/".$file);
            echo "
                <div class=\"icon\" data-name=\"$file\" title=\"$file\">
                    <input type=\"checkbox\" class=\"icon-checkbox\" title=\"add to favorite\">
                    <div class=\"icon-content\">
                        <div class=\"icon-img\">
                            $data
                        </div>
                        <div class=\"icon-img-original\" style=\"display:none\">
                            $data
                        </div>
                        <div class=\"icon-name\">
                            $file
                        </div>
                        <div class=\"icon-bar\">
                            <a href=\"icons/$file\" class=\"icon-download\" title=\"download file\">download</a>
                            <button class=\"icon-css\" title=\"copy as CSS background code\">css</button>
                        </div>
                    </div>
                </div>
            ";
        }
        ?>
    </div>

    <div class="popup">
        <div class="popup-inside">
            <div>
                <div class="popup-container">
            <button class="popup-close">Close</button>
            <h2 class="popup-title">Help</h2>
            <div class="popup-content">
                <p>I love <a href="https://icons.getbootstrap.com">Bootstrap Icons</a>. I created this page to make it easier to use these icons.</p>
                <p>How to use?</p>

                <ul>
                    <li>click on the icon to copy its code to the clipboard</li>
                    <li>Click on the "css" button to copy the icon code as css background. The rest of the properties (background-size, background-repeat) you need to add dam</li>
                    <li>click on the "download" button to download the icon to your disk</li>
                    <li>The default color of each icon is "currentColor". If you want to change it, use the bucket icon at the top of the page.</li>
                    <li>When you click the "css" button, the icon code will be copied to the clipboard as a background-image. If you will want to change the color in such code, change the value of the fill parameter. Specify the color in words e.q <code>fill="red"</code>. If you want use hex color, process it with %23, e.g. <code>fill="%23ff0000"</code></li>
                    <li>
                        <p>
                            Example show how to use icon as a CSS background:
                        </p>
                        <pre><code>
                           .icon-add {
                                display: inline-block;
                                width: 30px;
                                height: 30px;
                                background-image: url("data:image/svg+xml....");
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: 30px;
                            }
                        </code></pre>

                        <p>Second example show how to use icon like css mask. This technique allows you to change the color of an icon very easily using background-color:</p>

                        <pre><code>
                            %icon {
                                display: inline-flex;
                                width: 30px;
                                height: 30px;
                                -webkit-mask: $image;
                                -webkit-mask-position: center;
                                -webkit-mask-size: 30px;
                                -webkit-mask-repeat: no-repeat;
                                mask: $image;
                                mask-position: center;
                                mask-size: 30px;
                                mask-repeat: no-repeat;
                                background-color: currentColor;
                            }

                            .icon-add {
                                @extend %icon;
                                $image: url("data:image/svg+xml,%3Csvg ...");
                                -webkit-mask-image: $image;
                                mask-image: $image;
                            }
                            .icon-add:hover {
                                background-color: gold;
                            }
                        </code></pre>
                    </li>
                </ul>
                <hr>
                <p>Author: <a href="http://domanart.pl">Marcin Domański</a></p>
            </div>
        </div>
            </div>
        </div>
    </div>

    <script src="./js/bundle.min.js"></script>
</body>
</html>