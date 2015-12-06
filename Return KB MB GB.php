<script>
  function convertByteUnits (aBytes)
    {
        var unitIndex = 0;
        var units = ["B", "KB", "MB", "GB"];
        
        while ((aBytes >= 999.5) && (unitIndex < units.length - 1))
        {
            aBytes /= 1024;
            unitIndex++;
        }
        aBytes = aBytes.toFixed((aBytes > 0) && (aBytes < 100) ? 1 : 0);
        return [aBytes, units[unitIndex]];
    }
	
	var size = convertByteUnits(10000);
	size = size.toString();
	size = size.replace(","," ");
	alert(size);
</script>