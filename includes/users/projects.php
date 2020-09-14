<?php
include('includes/admin/db.php');
?>
<section id="projects">
    <div class="projects container">
        <div class="projects-header">
            <h1 class="section-title">Recent <span>Projects</span></h1>
        </div>
        
        <div class="all-projects">
        <?php
                $x =1;
                $result=$conn->query('SELECT * FROM projects');
                while($data=$result->fetch_assoc())
            {?>
            <div class="project-item">
            
                <div class="project-info">
                    <h1>Project <?php echo $x;?></h1>
                    <h2>Titre : <?php echo $data['titre']?></h2>
                    <p><?php echo $data['description']?></p>
                    <p>DATE DE DEBUT: <?php echo $data['date_debut']?></p>
                    <p>DATE DE FUN: <?php echo $data['date_fin']?></p>
                </div>
                <div class="project-img">
                    <img src="img/img-1.png" alt="img">
                </div>
                
            </div>
            
            <?php
            $x++;
            }
            $result->close();
            ?>
            
        </div>
        
    </div>
</section>