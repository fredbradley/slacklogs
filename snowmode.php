<!doctype html>
<html>
<head>
<title>Falling Snow Example | fredbradley.co.uk</title>
<style>
body {
    background-color: #1D1D1D;
    padding: 30px;
    margin: 0px;
}
#snowflakeContainer {
    position: absolute;
    left: 0px;
    top: 0px;
}
.snowflake {
    padding-left: 15px;
    font-family: Cambria, Georgia, serif;
    font-size: 14px;
    line-height: 24px;
    position: fixed;
    color: #FFFFFF;
    user-select: none;
    z-index: 1000;
}
.snowflake:hover {
    cursor: default;
}
h1 {
    font-size: 32px;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #FF3300;
    padding: 15px;
    color: #FFF;
    margin: 0px;
}
p, ol {
    font-family: "Franklin Gothic Medium", "Arial Narrow", sans-serif;
    font-size: 24px;
    color: #CCC;
}
li {
    margin-bottom: 24px;
    padding-left: 10px;
}
</style>
</head>
<body>
 
<div id="snowflakeContainer">
    <p class="snowflake">*</p>
</div>
<div id="content">
<h1>List of things I want from Santa</h1>
    <ol>
        <li>A pony</li>
        <li>Proof that wooly mammoths existed in the time of the railroads</li>
        <li>Recipe for the perfect bubble tea</li>
        <li>Timeframe for the REAL Matrix sequels</li>
        <li>Coal. Lots and lots of coal so that I can sell it to power plants</li>
    </ol>
</div>
<script src="http://www.kirupa.com/js/fallingsnow_v6.js"></script>
<script src="http://www.kirupa.com/js/prefixfree.min.js"></script>
</body>
 
</html>
