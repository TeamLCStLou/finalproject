<script>
    function SubmitProgStatus(pset, status_code) {
    $.post("save_prog_status.php", { pset: pset, status_code: status_code },
       function(data) {
         alert("Data Loaded: " + data);
       });
}
</script>

<?php      
    $prog_stat_menu = query("SELECT * FROM prog_status ORDER BY  `prog_status`.`order` ASC ;");
//    $prog_stat_selected = query("SELECT * FROM prog_status ORDER BY  `user_prog_status`.`order` 
//                                 WHERE `user_prog_status`.`pset` = `?` AND `user_prog_status`.`user_id` =`?`;", $_POST["pset"], $_SESSION["id"]);
    
    extract($prog_stat_menu);
    
    require ("../templates/prog_status_menu.php");
?>
    
