function download_remote($url , $save_path)
{
    $f = fopen( $save_path , 'w+');
     
    $handle = fopen($url , "rb");
     
    while (!feof($handle)) 
    {
        $contents = fread($handle, 8192);
        fwrite($f , $contents);
    }
     
    fclose($handle);
    fclose($f);
}