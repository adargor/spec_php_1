<h2>Навигация по сайту</h2>
<?php
if( !drawMenu($leftMenu) )
    trigger_error(ERR_ON_DRAW_MENU, E_USER_ERROR);
?>