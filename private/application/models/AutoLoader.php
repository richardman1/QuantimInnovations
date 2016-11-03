<?php
/**
* Lazy loads the classes required, uses DirectoryIterator to get all subfolders of the given folders
* @author Ricardo Vermaat
* @version 1.0
*/
class AutoLoader{

    public function __construct($p_aPaths){
        if(gettype($p_aPaths) == 'array'){
            foreach($p_aPaths as $sPath){
                if(gettype($sPath) == 'string'){
                    $oIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($sPath, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST);
                    foreach($oIterator as $oFile){
                        if($oFile->isDir()){
                                array_push($p_aPaths, $oFile->getPathName());
                        }
                    }
                }else{
                        throw new Exception('AutoLoader error: All elements in the paths array must be strings.');
                }
            }
            $sPath = implode(PATH_SEPARATOR, $p_aPaths);
            set_include_path($sPath.PATH_SEPARATOR.get_include_path());
            spl_autoload_register(array($this, 'load'));
        }else{
                echo 'Autoloader error: Paths parameter must be an array.';
        }
    }

    /**
     * Require the classes
     * @param p_sClass (string): The class to load
     */
    private function load($p_sClass){
            $sClass = NULL;
            $aPaths = explode(':', get_include_path());

            foreach($aPaths as $sPath){
                    if(file_exists($sPath.DIRECTORY_SEPARATOR.$p_sClass.'.php')){
                            $sClass = require_once $p_sClass.'.php';
                            break;
                    }
            }

            if($sClass === NULL){
                try{
                    require_once str_replace('_', '/', $p_sClass).'.php';
                }catch(Exception $e){
                     echo 'Autoloader error: Class could not be found.';
                }
        }
    }
}


