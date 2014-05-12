<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>How to copy text to Clipboard using jQuery | PGPGang.com</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<script type="text/javascript" src="jquery-1.8.2.js"></script> 
<script src="jquery.zclip.js"></script>
<style>
#dynamic {
    font-size: 15px;
    height: 28px;
    width: 357px;
}
</style>

<script>
    $(document).ready(function(){
        $("a#copy-dynamic").zclip({
           path:"ZeroClipboard.swf",
           copy:function(){return $("input#dynamic").val();}
        });
    });
</script>
  </head>
  <body>
    <h2>How to copy text to Clipboard using jQuery Example.&nbsp;&nbsp;&nbsp;=> <a href="http://www.phpgang.com/">Home</a> | <a href="http://demo.phpgang.com/">More Demos</a></h2>

<input type="text" id="dynamic" value="PHPGang demo is available!!" />
<a href="#copy" id="copy-dynamic">Copy Now</a>
</body>
</html>