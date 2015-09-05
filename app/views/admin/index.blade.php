<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Administrator dashboard</h1>
    </div>
</div>
<div class="row">
    @include('admin._partials.info_block', ['total' => User::count(),
                    'label' => 'Users',
                    'model' => 'users',
                    'style' => 'primary',
                    'icon' => 'fa-users'])
    @include('admin._partials.info_block', ['total' => Category::count(),
                    'label' => 'Categories',
                    'model' => 'categories',
                    'style' => 'green',
                    'icon' => 'fa-list'])
    @include('admin._partials.info_block', ['total' => Word::count(),
                    'label' => 'Words',
                    'model' => 'words',
                    'style' => 'yellow',
                    'icon' => 'fa-th'])
</div>
<div class="row">
    @include('admin._partials.chart_block', ['label' => 'Words count by Category',
        'model' => 'categories',
        'data' => $wordByCategory,
        'color' => '#428bca',
        'chartId' => 'words-count-by-categories-chart'])
</div>
