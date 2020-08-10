<?php include 'config.php'; ?>
<?php include 'includes/public_functions.php'; ?>
<?php include 'includes/head_section.php'; ?>

<?php
    if (isset($_GET['topic'])):
        $topic_id = $_GET['topic'];
        $posts = getPublishedPostsByTopic($topic_id);
    endif;
?>

    <title>Life Blog | Home </title>
</head>

<body>
    <div class="container">
        <?php include ROOT_PATH . '/includes/navbar.php'; ?>

        <div class="content">
            <h2 class="content-title">
                Articles on <u><?php echo getTopicNameById($topic_id); ?></u>
            </h2>
            <hr>

            <?php foreach ($posts as $post): ?>
                <div class="post" style="margin-left: 0px;">
                    <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" alt="" class="post_image">
                    <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                        <div class="post_info">
                            <h3><?php echo $post['title']; ?></h3>
                            <div class="info">
                                <span><?php echo date("F j, Y ", strtotime($post['created_at'])); ?></span>
                                <span class="read_more">Read more...</span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php include ROOT_PATH . '/includes/footer.php'; ?>