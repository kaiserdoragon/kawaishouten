<?php if (comments_open() && !post_password_required()) : ?>
    <div id="comments" class="comments-area">

        <?php if (have_comments()) : ?>
            <h3 class="comments-title">この記事へのコメント</h3>
            <ul class="comment-list">
                <?php
                wp_list_comments([
                    'style'      => 'ul',
                    'short_ping' => true,
                ]);
                ?>
            </ul>

            <!-- コメントのページネーション -->
            <div class="comment-navigation">
                <?php paginate_comments_links(); ?>
            </div>

        <?php endif; ?>

        <?php
        $comment_form_args = [
            'title_reply'          => 'コメントを残す',
            'title_reply_before'   => '<h3 class="comment-reply-title">',
            'title_reply_after'    => '</h3>',
            'comment_notes_before' => '<p class="comment-notes">コメントは承認後に公開されます。</p>',
            'label_submit'         => 'コメントを送信する',
            'class_form'           => 'comment-form',
        ];

        comment_form($comment_form_args);
        ?>

    </div>
<?php endif; ?>