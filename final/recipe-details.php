
<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'Recipe Details';
include_once __DIR__ . '/_components/header.php';
?>

<!-- MAIN CONTENT GOES HERE -->

<div class="hero-img" style="background-image: url(<?php echo site_url(); ?>/dist/images/hero-img.png);"></div>

<div class="container">

    <div class="recipe-blurb">
        <h1 class="recipe-title">Easy Vegan Chocolate Chip Cookies</h1>
        <p class="recipe-tags">Vegan, Beginner Friendly</p>
        //star system
        <p class="recipe-blurb-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ut odio quasi tempora, fuga non aut est mollitia. Delectus tempore expedita distinctio eum repudiandae perspiciatis, eaque nemo ad dolores aut. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste optio corrupti, doloribus molestias dolore magni maiores fuga quaerat ipsa sit sapiente obcaecati saepe quas aut commodi expedita veritatis, aliquid praesentium!
        </p>
    </div>

    <div class="blurb-correction">
        <div class="ingredients">
            <h1 class="ingredients-title">Ingredients</h1>
            <div class="grid-2-col">
                <ul>
                    <li><p>Lorem Ipsum</p></li>
                    <li><p>Lorem Ipsum</p></li>
                    <li><p>Lorem Ipsum</p></li>
                    <li><p>Lorem Ipsum</p></li>
                    <li><p>Lorem Ipsum</p></li>
                </ul>
                <ul>
                    <li><p>Lorem Ipsum</p></li>
                    <li><p>Lorem Ipsum</p></li>
                    <li><p>Lorem Ipsum</p></li>
                    <li><p>Lorem Ipsum</p></li>
                    <li><p>Lorem Ipsum</p></li>
                </ul>
            </div>
        </div>

        <div class="instructions">
            <h1 class="instructions-title">Instructions</h1>
            <p>    
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio omnis, aliquam velit modi optio aut! Numquam eaque sit id cumque, cum labore dolor sint blanditiis, modi accusamus beatae veniam asperiores?

                <br><br>
                Distinctio aspernatur earum pariatur modi rerum? Dolore impedit, inventore autem tempore ratione fuga! Aspernatur eos illum tempora maxime accusantium eum saepe maiores optio minima, adipisci exercitationem accusamus, sint iusto quod!
                Maiores beatae voluptatibus perspiciatis fugit debitis iure omnis iusto nam quaerat saepe totam, dolore labore, voluptatem eos consectetur. 
                
                <br><br>
                
                Delectus qui architecto unde distinctio saepe aperiam nostrum nemo eligendi fugit sequi!
                Praesentium neque repellat vel. Voluptatum suscipit dolorem tenetur architecto eos fuga beatae necessitatibus corrupti, ullam alias eius autem inventore aspernatur pariatur? Libero doloribus hic pariatur cumque, officiis minus odio ullam.
                Rem, cupiditate qui corporis iste, dicta cum dolore dignissimos commodi earum alias beatae, quis recusandae porro ullam eos quas eveniet unde error odit! Soluta harum tenetur expedita, quod ducimus placeat.

                <br>
                <br>

                Alias quam quasi excepturi nobis necessitatibus quas nesciunt quibusdam, dolorum blanditiis deserunt impedit veritatis eos consectetur error, delectus optio possimus repudiandae debitis hic? Est consequatur quibusdam tenetur nam doloribus odio?
                Ratione ipsum minus, nesciunt illum quas, beatae dolorum unde harum ex minima voluptates exercitationem, at cum esse id ullam doloribus temporibus? Beatae distinctio illum vitae aperiam cumque assumenda, voluptas fuga!
                Autem suscipit temporibus natus deserunt amet neque iure, veniam blanditiis eaque recusandae doloribus minus dolores delectus at distinctio molestias a exercitationem non molestiae voluptate nostrum nisi adipisci itaque! Eum, ipsum.

                <br>
                <br>

                Consequuntur officiis ullam sunt vel ex unde iste quo possimus perspiciatis, ab quibusdam eum voluptatibus sequi enim accusantium optio aliquid sed explicabo praesentium excepturi repellendus exercitationem! Possimus fugiat aliquid doloribus?
                Doloribus porro nulla, culpa officia dolorem cum illum veritatis atque corporis exercitationem iusto obcaecati recusandae temporibus distinctio ullam fugiat consequuntur nisi magnam? Sequi ipsa blanditiis illum, voluptatibus amet vitae unde.
            </p>
        </div>

    </div>

</div>

<?php include_once __DIR__ . '/_components/footer.php';