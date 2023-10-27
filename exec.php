$row = exec('dir',$output,$error);
while(list(,$row) = each($output)){
echo $row, "<BR>n";
}
/*i_am_on_the_guestlist*/
