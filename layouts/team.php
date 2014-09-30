<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
 <?php        
        echo team_members('KellegiNimiVOL1', 'testvol1@test.ee', 'MingiTegevusVOL1');
        echo team_members('KellegiNimiVOL2', 'testvol2@test.ee', 'MingiTegevusVOL2');
        echo team_members('KellegiNimiVOL3', 'testvol3@test.ee', 'MingiTegevusVOL3');
        echo team_members('KellegiNimiVOL4', 'testvol4@test.ee', 'MingiTegevusVOL4');

?>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
