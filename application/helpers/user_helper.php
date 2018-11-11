<?php

function is_critical($deadline){
	return (date("Y-m-d H:i:s")>$deadline);
}