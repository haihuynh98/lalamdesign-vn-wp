<div class="flip-card">
    <a href="<?php echo get_the_permalink() ?>">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <figure class="" style="width: 100%; margin: 0; padding: 0;	background: #fff; overflow: hidden;">
                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'tiger_portfolio_thumbnail' ); ?>"
                         alt="<?php echo get_the_title(); ?>" style="width:100%">
                </figure>
            </div>
            <div class="flip-card-back"
                 style=" background-image: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'tiger_portfolio_thumbnail' ); ?>')">
            </div>
            <div class="flip-card-text">
                <h1 style=""><?php echo get_the_title(); ?></h1>
                <p><?php echo get_field( 'address', get_the_ID() ) ?></p>
            </div>
        </div>
    </a>
</div>