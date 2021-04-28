<section class="comments comments-add">
    <h2 class="section-title"> Commentaires </h2>
    <p><?php $comments = get_comments();
    print_r($comments) ; ?></p>
</section>

<section class="comments comments-add">
    <h2 class="section-title"> Commenter </h2>

    <form action="" method="post">
        <label for="message"> Message </label>
        <input type="textarea" class="text-message">
        <button> Envoyer </button>
    </form>
</section>