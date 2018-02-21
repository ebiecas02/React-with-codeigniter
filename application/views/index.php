<?php
/**!
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 */

/**
 * Example of using the ReactJS class
 */
 
ini_set("error_reporting", E_ALL);
include 'ReactJS.php';

$rjs = new ReactJS(
  // location of React's code
  file_get_contents('/build/react-bundle.js'),
  // app code
 file_get_contents('/build/table.js')
);

//var_dump(file_get_contents('build/react-bundle.js'));

// data to be passed to the component
$data =
  array('data' => array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
  ));

// set the component and its data
// after this you can call getMarkup()/getJS()
// Then you can set another component to render
// and do that as many times as the components you need
// all the while reusing the $rjs instance
//$rjs->setComponent('Table', $data);

//var_dump($rjs);

var_dump(extension_loaded ( 'v8js' ));
echo '<br>Current PHP version: ' . phpversion();

?>
<!doctype html>
<html>
  <head>
    <title>React page</title>
    <!-- css and stuff -->
  </head>
  <body>

    <!-- render server content here -->
    <div id="page"><?php //echo $rjs->getMarkup(); ?>echo  jkgsdk</div>

    <!-- load react and app code -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/react.js"></script>
    <script src="build/table.js"></script>
	
	<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
	<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>

    <script>
    // client init/render
    // this is a straight echo of the JS because the JS resources
    // were loaded synchronously
    // You may want to load JS async and wrap the return of getJS()
    // in a function you can call later
    <?php //echo $rjs->getJS('#page', "GLOB"); ?>
    </script>
  </body>
</html>
