<?php /** @var string $taskClass */ ?>
@include('tasks.batch-info', [
    'instructionsView' => $taskClass::instructionView(),
    'commandLine' => 'wp mediacloud migrate [--limit=<number>] [--offset=<number>] [--page=<number>] [--path-handling=preserve|replace|prepend] [--skip-thumbnails] [--skip-imported] [--order-by=date|title|filename] [--order=asc|desc]',
    'commandTitle' => 'Migrate To Cloud Storage',
    'commandLink'=> 'https://help.mediacloud.press/article/73-migrate-to-cloud-storage',
    'warning' => $warning,
    'taskClass' => $taskClass
])