<html>
    <head>
        <title>This is static title</title>
        <link type="css/text" rel="stylesheet" href="<?=URL;?>public/css/defult_auto_css.css" />
        <script type="text/javascript" src="<?=URL;?>public/js/jQuery.js"></script>
        
        <?php 
            if(isset($this->js)){
                foreach($this->js as $js){
                   echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>'; 
                }
            }
                
        ?>
    
    </head>
    <body>
        <div id="header">
            <a href ="<?=URL;?>index">Index</a>
            <a href ="<?=URL;?>help">Help</a>
            
            <?php 
            if(Session::getSession('loggedIn')== TRUE): ?>
            <a href ="<?=URL;?>logout">logout</a>   
            <?php else :?>
            <a href ="<?=URL;?>login">Login</a>
            <?php endif; ?>
        </div>
        <div id="content">