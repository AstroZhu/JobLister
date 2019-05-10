<?php require 'inc/header.php'; ?>


      <div class="jumbotron">
        <h1 class="display-3">Find A Job</h1>
        <form action="index.php" method="GET">
            <select class="form-control" name="category">
              <option value="0">Choose Category</option>
              <?php foreach($categories as $category): ?>
                  <option value="<?php echo $category->id; ?>">
                    <?php echo $category->name ?></option>
              <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" class="btn btn-lg btn-success" value="FIND">
        </form>
      </div>
     <h3><?php echo $title; ?></h3>
     <?php foreach($jobs as $job): ?>
      <div class="row marketing">
              <div class="col-md-10">
                <h4><?php echo $job->job_title; ?></h4>
                <p><?php echo $job->description ?></p>
              </div>
              <div class="col-md-2">
                 <a class="btn btn-primary" href="job.php?id=<?php echo $job->id; ?>">View</a>
              </div>
      </div>
    <?php endforeach; ?>


<?php require 'inc/footer.php';?>
