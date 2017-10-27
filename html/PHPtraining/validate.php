<?php

if (isset($_POST['submit']) && $_POST['submit'] == Submit) {
    if (isset($_POST['password']) && $_POST['password'] == 9999) {
        echo "<script>
    alert(\"Welcome Wizard!!\");
    window.location= \"Practc\";
    </script>";
    } else {
        echo "<script>
    alert(\"Sorry Please Enter Correct Password\");
    window.location.href = \"index.html\";
    </script>";
    }
} else {
    echo "<script>
  alert(\"Sorry This is only for Wizard!!!\");
  window.location.assign(\"../\")
  </script>";
}
