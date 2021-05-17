@section('sidevar')
    <p><a href="https://twitter.com/RSPN_Hideouts">通報用Twitter</a></p>
    <p><a href="https://fpsjp.net/archives/383499">通報用aaフォーム</a></p>

    <div class="border-bottom" style="padding:10px;">

    <div style = "width: 240px;">
    @foreach($twi_info->statuses as $items)        
        <?php $twi_url = "https://thttps://twitter.com/8eCk7SAWmTVWC0X/status/" . $items->id ?>
        <blockquote class="twitter-tweet" data-tweet-limit="5">
            <a href= {{$twi_url}}></a>
        </blockquote>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    @endforeach
    </div>

<!--
    <blockquote class="twitter-tweet" width="100" data-tweet-limit="5">
        <a href="https://thttps://twitter.com/8eCk7SAWmTVWC0X/status/1392398117094363136"></a>
    </blockquote>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
    </script>
-->

@show