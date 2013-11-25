
                <article>
                                    <h2>Web Developer</h2>
        <header>

                        <h3>OBJECTIVE: </h3>

                        <p>
                        Seeking to gain full-time employment in the web industry, leverage my current experience and skills, and continue to adapt, grow, and learn new technologies within this ever-changing field.
                        </p>
                    </header>
                    <section>
                   
<hr />

<h3>EXPERIENCE: </h3>

<div class="grow">
<?php
include("exp.dat");

foreach($exp as $k=>$v) {
?>
<div class="card">
<div class="pull-left "><b><?php echo $v[pos]; ?></b></div>
<div class="pull-right "><?php echo $v[date]; ?></div>
<br />
<div class="pull-left "><?php echo $v[loc]; ?></div>
<div class="pull-right "><i><?php echo $v[city]; ?></i></div>
<br />
<p>
<?php echo $v[desc]; ?>
</p>
</div>
<?php } ?>
</div>

                    </section>
                   
                </article>
