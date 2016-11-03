<?php
class SpecsView extends View{
    public function __construct() {
    }

    public function render() {
        $this->htmlCode =
        '
        <aside id="extra_menu">
            <ul>
                <li> <a href="?page='.Constants::PAGE_QI_WATCH.'"> Qi-Watch </a> </li>
                <li> <a href="?page='.Constants::PAGE_PI_WATCH.'"> Pi-Watch </a> </li>
                <li> <a href="?page='.Constants::PAGE_SPECS.'"> Specificaties </a> </li>
                <li> <a href="?page='.Constants::PAGE_DESIGN.'"> Design </a> </li>
            </ul>
        </aside>
        <hr />
        

        <table>
        <tr>
        <td width="200"></td>
        <th width="300">Pi-Watch P700i</th>
        <th width="300">Qi-Watch Q500i</th>
        </tr>
         <tr>
        <th>Processor</td>
        <td>Snapdragon 400 Quad core</td>
        <td>Snapdragon 200 Dual core</td>
        </tr>
         <tr>
        <th>Display</td>
        <td>1.8” 512 x 512 ips display <br>406 pixel per inch <br>Multitouch <br>Maximale helderheid 400 nits</td>
        <td>1.8” 256 x 256 ips display <br>203 pixel per inch <br>Multitouch <br>Maximale helderheid 300 nits</td>
        </tr>
         <tr>
        <th>Camera</td>
        <td>8 Megapixel <br>Autofocus <br>Face detection <br>Photo geotagging <br>Panorama</td>
        <td>5 Megapixel <br>Autofocus <br>Face detection <br>Photo geotagging <br>&nbsp;</td>
        </tr>
         <tr>
        <th>Beamer</td>
        <td>200 nits maximum brightness <br>1280 x 720 mode</td>
        <td>- <br>&nbsp;</td>
        </tr>
         <tr>
        <th>Mobile & wireless</td>
        <td>Bluetooth 4.0 802.11a/b/g/n <br>Wi-Fi 802.11n 2.4GHz and 5GHz</td>
        <td>Bluetooth 4.0 802.11a/b/g/n <br>Wi-Fi 802.11n 2.4GHz</td>
        </tr>
         <tr>
        <th>Capacity</td>
        <td>16GB (upgrade-able to 128GB)</td>
        <td>8GB (upgrade-able to 64GB)</td>
        </tr>
         <tr>
        <th>Weight</td>
        <td>108 Grams</td>
        <td>82 Grams</td>
        </tr>
         <tr>
        <th>Water resistant</td>
        <td>Yes (up to 5m)</td>
        <td>Yes (up to 2m)</td>
        </tr>
         <tr>
        <th>Streaming functions</td>
        <td>Wireless stream pictures to any TV</td>
        <td>-</td>
        </tr>
         <tr>
        <th>Battery</td>
        <td>1200map (up to 10 hours) <br>Wireless charging</td>
        <td>800map (up to 10 hours) <br>Wireless charging</td>
        </tr>
         <tr>
        <th>System requirements</td>
        <td>Windows 8, <br>Mac OS X 10.7 - 10.8 - 10.9</td>
        <td>Windows 8, <br>Mac OS X 10.7 - 10.8 - 10.9</td>
        </tr>
         <tr>
        <th>Price</td>
        <td>$449,-</td>
        <td>$299,-</td>
        </tr>
        </table>
        

        ';

    return $this->htmlCode;
    }
}