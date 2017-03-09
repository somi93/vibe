<!DOCTYPE html>
<html lang="en" class="app">
    <head>
        <meta charset="utf-8" />
        <title>Vibe | Web Application</title>
        <meta name="description" content="app, web app, responsive, flat, flat ui, ui kit, off screen nav" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/js/jPlayer/jplayer.flat.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.min.css" type="text/css" />
        <script src="https://use.fontawesome.com/24158f24c4.js"></script>
    </head>
    <body class="">
    <section class="vbox">
        <?php if($header) echo $header ;?>
        <section>
            <section class="hbox stretch">
                <?php if($nav) echo $nav ;?>
                <section id="content">
                    <section class="hbox stretch">
                        <section>
                            <section class="vbox">
                                <?php if($footer) echo $footer ;?>
                                <?php if($middle) echo $middle ;?>
                            </section>
                        </section>
                        <?php if($sidebar) echo $sidebar ;?>
                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                </section>
            </section>
        </section>
    </section>
    <script src="<?php echo base_url(); ?>public/js/app.v1.js"></script>
    <script src="<?php echo base_url(); ?>public/js/app.plugin.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jPlayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jPlayer/demo.js"></script>
</body>
</html>