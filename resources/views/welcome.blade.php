@extends('layout')

@section('content')
    <section class="posts container">
        <article class="post no-image">
            <div class="content-post">
                <header class="container-flex space-between">
                    <div class="date">
                        <span class="c-gray-1">sep 20</span>
                    </div>
                    <div class="post-category">
                        <span class="category text-capitalize">i do travel</span>
                    </div>
                </header>
                <h1>No difference how many peaks you reach if there was no pleasure in the climb.</h1>
                <div class="divider"></div>
                <p>Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.</p>
                <footer class="container-flex space-between">
                    <div class="read-more">
                        <a href="#" class="text-uppercase c-green">read more</a>
                    </div>
                    <div class="tags container-flex">
                        <span class="tag c-gray-1 text-capitalize">#yosemite</span>
                        <span class="tag c-gray-1 text-capitalize">#peak</span>
                        <span class="tag c-gray-1 text-capitalize">#explorer</span>
                    </div>
                </footer>
            </div>
        </article>

        <article class="post w-image">
            <figure><img src="img/img-post-1.png" alt="" class="img-responsive"></figure>
            <div class="content-post">
                <header class="container-flex space-between">
                    <div class="date">
                        <span class="c-gray-1">sep 18</span>
                    </div>
                    <div class="post-category">
                        <span class="category text-capitalize">i do observe</span>
                    </div>
                </header>
                <h1>You know, I'd rather argue with you, then laugh with anyone else. </h1>
                <div class="divider"></div>
                <cite class="cite">Curabitur luctus placerat lorem id eleifend. Nulla ac lacus finibus, tempor velit hendrerit, vulputate lacus. Nunc fermentum nunc sem, ac eleifend tellus cursus nec. Donec a euismod est, vitae accumsan purus. Proin aliquet ex massa, ac finibus magna commodo vitae. </cite>
                <p>Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.</p>
                <p>Sed sagittis commodo dolor. Vivamus elementum sem sed sapien bibendum viverra. Curabitur semper scelerisque turpis eu ullamcorper. Morbi tincidunt auctor orci id consequat. Nulla odio mi, iaculis id congue quis, euismod id nisi. In varius congue diam, et viverra lorem bibendum ut.</p>
                <footer class="container-flex space-between">
                    <div class="read-more">
                        <a href="#" class="text-uppercase c-green">read more</a>
                    </div>
                    <div class="tags container-flex">
                        <span class="tag c-gray-1 text-capitalize">#yosemite</span>
                        <span class="tag c-gray-1 text-capitalize">#peak</span>
                        <span class="tag c-gray-1 text-capitalize">#photo</span>
                    </div>
                </footer>
            </div>
        </article>

        <article class="post w-gallery">
            <div class="gallery-photos masonry">
                <figure class="gallery-image"><img src="img/img-post-gallery-1.png" alt=""></figure>

                <figure class="gallery-image"><img src="img/img-post-gallery-3.png" alt=""></figure>

                <figure class="gallery-image"><img src="img/img-post-gallery-2.png" alt=""></figure>

                <figure class="gallery-image"><img src="img/img-post-gallery-hover.png" alt=""></figure>
            </div>
            <div class="content-post">
                <header class="container-flex space-between">
                    <div class="date">
                        <span class="c-gray-1">sep 14</span>
                    </div>
                    <div class="post-category">
                        <span class="category text-capitalize">i do photos</span>
                    </div>
                </header>
                <h1>Everything in the universe has a rhythm, everything dances.</h1>
                <div class="divider"></div>
                <p>Donec hendrerit magna vitae metus viverra tincidunt. Cras dolor lacus, placerat sed nulla in, egestas pharetra neque. Sed sit amet aliquet erat. Integer nec mi convallis, condimentum odio quis, pharetra tellus. Donec mollis libero in volutpat luctus. Cras laoreet pulvinar dapibus. Nulla laoreet odio at nunc semper vestibulum. Sed magna mauris, molestie eu ipsum et, pharetra egestas neque.</p>
                <footer class="container-flex space-between">
                    <div class="read-more">
                        <a href="#" class="text-uppercase c-green">read more</a>
                    </div>
                    <div class="tags container-flex">
                        <span class="tag c-gray-1">#Yosemite</span>
                        <span class="tag c-gray-1">#Photo</span>
                        <span class="tag c-gray-1">#Hi-Res</span>
                    </div>
                </footer>
            </div>
        </article>

        <article class="post w-video">
            <div class="video">
                <iframe width="100%" height="480" src="https://www.youtube.com/embed/Zsqep7_9_mw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="content-post">
                <header class="container-flex space-between">
                    <div class="date">
                        <span class="c-gray-1">sep 14</span>
                    </div>
                    <div class="post-category">
                        <span class="category text-capitalize">i do watch</span>
                    </div>
                </header>
                <h1>As human beings, we have a natural compulsion to fill empty spaces.</h1>
                <div class="divider"></div>
                <footer class="container-flex space-between">
                    <div class="tags container-flex">
                        <span class="tag c-gray-1">#Yosemite</span>
                        <span class="tag c-gray-1">#Peak</span>
                        <span class="tag c-gray-1">#Video</span>
                    </div>
                </footer>
            </div>
        </article>

        <article class="post cite">
            <div class="content-post">
                <header class="container-flex space-between">
                    <div class="date">
                        <span class="c-gray-1">sep 14</span>
                    </div>
                    <div class="post-category">
                        <span class="category text-capitalize">i do quote</span>
                    </div>
                </header>
                <figure class="img-cite"><img src="img/img-cite.png" alt=""></figure>
                <h2>There is always something left to love. And if you ain’t learned that, you ain’t learned nothing.</h2>
                <footer>
                    <div class="tags container-flex">
                        <span>— Lorraine Hansberry</span>
                    </div>
                </footer>
            </div>
        </article>

        <article class="post audio">
            <div class="c-audio">
                <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/315307209&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
            </div>
            <div class="content-post">
                <header class="container-flex space-between">
                    <div class="date">
                        <span class="c-gray-1">sep 14</span>
                    </div>
                    <div class="post-category">
                        <span class="category">i do listen</span>
                    </div>
                </header>
                <h1>Music was my refuge. I could crawl into the space between the notes and curl my back to loneliness.</h1>
                <div class="divider"></div>
                <p>Donec hendrerit magna vitae metus viverra tincidunt. Cras dolor lacus, placerat sed nulla in, egestas pharetra neque. Sed sit amet aliquet erat. Integer nec mi convallis, condimentum odio quis, pharetra tellus. Donec mollis libero in volutpat luctus. Cras laoreet pulvinar dapibus. Nulla laoreet odio at nunc semper vestibulum. Sed magna mauris, molestie eu ipsum et, pharetra egestas neque.</p>
                <footer class="container-flex space-between">
                    <div class="read-more">
                        <a href="#" class="text-uppercase c-green">read more</a>
                    </div>
                    <div class="tags container-flex">
                        <span class="tag c-gray-1">#Weekend</span>
                        <span class="tag c-gray-1">#Music</span>
                        <span class="tag c-gray-1">#Discovery</span>
                    </div>
                </footer>
            </div>
        </article>

        <article class="post w-slider">
            <figure><img src="img/img-slider-1.png" alt="" class="img-responsive"></figure>
            <div class="content-post">
                <header class="container-flex space-between">
                    <div class="date">
                        <span class="c-gray-1">sep 12</span>
                    </div>
                    <div class="post-category">
                        <span class="category text-capitalize">i do explore</span>
                    </div>
                </header>
                <h1>Nature and Books belong to the eyes that see them. </h1>
                <div class="divider"></div>
                <cite class="cite">Nunc a enim interdum lectus accumsan sagittis. Ut mauris diam, efficitur vitae malesuada ut, tempus et mi. Sed eget leo vehicula, dapibus arcu id, viverra erat. Proin auctor non nulla sed mollis.</cite>
                <p>Nulla elit leo, tincidunt eu lacus ut, suscipit gravida tortor. Praesent feugiat, neque non pellentesque, velit sem hendrerit arcu, eu viverra ligula eu tortor. Suspendisse et cursus enim. Curabitur condimentum, sem quis pharetra hendrerit, leo odio rhoncus felis, sed posuere augue diam feugiat enim. Donec gravida non metus eu pretium. Ut sed sodales dolor, non vehicula enim. Nam fringilla blandit sem, eget vestibulum arcu porta sed. Mauris sit amet nulla id ante semper luctus id a enim.</p>
                <p>Sed ac venenatis dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ut congue nulla. Aenean elementum gravida convallis. Integer ac neque nisi. Sed ac magna in risus convallis laoreet. Pellentesque in orci ante.</p>
                <footer class="container-flex space-between">
                    <div class="read-more">
                        <a href="#" class="text-uppercase c-green">read more</a>
                    </div>
                    <div class="tags container-flex">
                        <span class="tag c-gray-1 text-capitalize">#Idea</span>
                        <span class="tag c-gray-1 text-capitalize">#Yosemite</span>
                        <span class="tag c-gray-1 text-capitalize">#Vacation</span>
                    </div>
                </footer>
            </div>
        </article>

        <article class="post image-w-text">
            <div class="content-post">
                <header class="container-flex space-between">
                    <div class="date">
                        <span class="c-gray-1">sep 11</span>
                    </div>
                    <div class="post-category">
                        <span class="category">i do reflect</span>
                    </div>
                </header>
                <h1>Democracy means simply the bludgeoning of the people by the people for the people.</h1>
                <div class="divider"></div>
                <div class="image-w-text-content">
                    <figure class="block-left"><img src="img/img-post-2.png" alt=""></figure>
                    <p>Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.</p>
                    <p>Mauris sem odio, rhoncus eget euismod sed, pellentesque sit amet felis. Praesent dictum eleifend dui et efficitur. Nunc non orci in neque sodales semper. Etiam euismod volutpat lorem, vestibulum malesuada justo aliquet eget. Nunc lacus ante, varius a euismod eu, finibus commodo erat. Curabitur tincidunt sit amet nunc id interdum. Aliquam augue nisi, venenatis vitae ex at, lobortis fringilla nibh. Proin placerat enim vitae egestas eleifend. Aliquam</p>
                    <p>quis orci dignissim, posuere nibh a, eleifend augue. Cras quis metus nec tortor aliquet ullamcorper. Quisque varius porta metus, ut maximus dolor euismod nec. Suspendisse sit amet feugiat turpis.</p>
                    <cite class="cite-2">Curabitur ut leo pulvinar, consectetur magna eu, feugiat purus. Morbi hendrerit lectus turpis, a porttitor velit imperdiet id.</cite>
                    <p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor. Nullam scelerisque ante mauris, egestas commodo nisi gravida ultrices. Suspendisse dapibus feugiat tincidunt. Aliquam gravida quam at ipsum sagittis bibendum. </p>
                </div>
                <footer class="container-flex space-between">
                    <div class="read-more">
                        <a href="#" class="text-uppercase c-green">read more</a>
                    </div>
                    <div class="tags container-flex">
                        <span class="tag c-gray-1">#Democracy</span>
                        <span class="tag c-gray-1">#Introspection</span>
                    </div>
                </footer>
            </div>
        </article>

    </section><!-- fin del div.posts.container -->

    <div class="pagination">
        <ul class="list-unstyled container-flex space-center">
            <li><a href="#" class="pagination-active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
        </ul>
    </div>
@endsection


