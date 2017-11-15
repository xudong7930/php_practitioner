<?

class Post {
    public $title;
    public $published;   

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('霸王龙的小短手有什么用', true),
    new Post('把手机放在太空会怎样', false),
    new Post('有过三星Note7手机的人都知道，电池会炸', true),
    new Post('自从攀登乌鲁鲁巨石合法以后，每年大概有6万名游客光临这块胜景。', false),
    new Post('我们开发出抗衰老的技术越有效，患上癌症的风险就越高', true)
];

// example 1
var_dump($posts);


// example 2
$unpublished = array_filter($posts, function ($post) {
    return !$post->published; 
});

var_dump($unpublished);


// example 3
$modified = array_map(function ($post) {
    // return (array)$post;
    return [
        'title' => $post->title,
        // 'published' => $post->published
    ];
}, $posts);
var_dump($modified);

// example 4
$titles = array_column($posts, 'title');
var_dump($titles);
