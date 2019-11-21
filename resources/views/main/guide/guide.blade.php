@extends('main.layouts.page')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <h1>Unicycling Guide</h1>
            <hr>
            <h3>Quickstart</h3>
            <p>Eli Brill's Unicycle School is a great first step for getting started. I will give you all a lot of additional information on this page, but these videos will help you learn how to get started quickly.</p>
            <p>Note that Eli Brill's videos are for learning urban riding, so if you'd like to learn a different discipline don't worry about progressing past his first few videos if you don't want to.</p>
            <p>For more information on the different disciplines check out the <a href="{{ route('faq') }}">FAQ</a>!</p>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LUNv6B6JBJ8?listType=playlist&list=PLdKARu4d6vwXYhdoLgOQNKOfvj8NVhnMa" frameborder="0" allowfullscreen></iframe>
            </p>
            <p>
                To get started, watch Eli's first tutorial video above, and keep these key points in mind:
                <ul>
                    <li>
                        <b>To prevent injury, do not try to stay on the unicycle if you're likely to fall.</b> If you're about to fall off, focus on landing on your feet. Let the unicycle roll away from you and jump or step off the unicycle.
                    </li>
                    <li>
                        Find a wall or a fence to hold onto.
                    </li>
                    <li>
                        Place your first foot on the back pedal, somewhere within the region shown here (try to go closer to the 6:00 position when you first start so you don't hit your shins with the other pedal):<br>
                        <img src="/images/Pedal_Diagram.png" alt="Pedal Diagram" style="max-height:100px">
                    </li>
                    <li>
                        <b>Do not look down.</b> Look straight ahead at something far away. This will help you keep your balance better when riding, freemounting or doing many other more advanced types of riding in the future.
                    </li>
                    <li>
                        Sit upright. Don't lean excessively backwards or forwards.
                    </li>
                    <li>
                        Put lots of weight on the seat as opposed to the pedals. Putting your weight on the pedals will make it more awkward and uneven to pedal.
                    </li>
                    <li>
                        Don't hold onto the seat. Let your arms move around to keep you balanced.
                    </li>
                </ul>
                When you're ready to learn more, check out the page dedicated to <a href="{{ route('unischool') }}">Eli Brill's Unicycle School!</a>
            </p>
            <hr>
            <h3>Still having trouble?</h3>
            <p>
                There's plenty of unicyclists on every social media platform out there. Find your preferred platform here and ask for help!
                <ul>
                    <li><a href="https://discord.gg/RXgdcTw">Discord</a></li>
                    <li><a href="https://www.reddit.com/r/unicycling/">Reddit</a></li>
                    <li><a href="https://www.facebook.com/groups/115835695144753/">Facebook</a></li>
                    <li><a href="http://unicyclist.com/forums/">Unicyclist.com Forum</a></li>
                </ul>
                I recommend Discord as I own the Discord server myself, and will respond fairly quickly if you need help. However, it can be hard to get used to so go ahead and use whatever platform you're most comfortable with!
            </p>
            {{--  <p>
                You may also <a href="{{ route('feedback') }}">send me a message directly.</a>
            </p>  --}}
        </div>
    </div>
@endsection

@section('style')

@endsection
