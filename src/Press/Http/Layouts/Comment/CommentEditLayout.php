<?php

declare(strict_types=1);

namespace Orchid\Press\Http\Layouts\Comment;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;

class CommentEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return array
     * @throws \Throwable|\Orchid\Screen\Exceptions\TypeException
     */
    public function fields(): array
    {
        $fields[] = Field::tag('textarea')
                            ->name('comment.content')
                            ->max(255)
                            ->rows(10)
                            ->required()
                            ->title(trans('platform::systems/comment.content'))
                            ->help(trans('platform::systems/comment.user_comment'));

        $fields[] = Field::tag('checkbox')
                    ->name('comment.approved')
                    ->title(trans('platform::systems/comment.checking'))
                    ->help(trans('platform::systems/comment.show_comment'));

        return $fields;
    }
}