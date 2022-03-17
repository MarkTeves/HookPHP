<?php
declare(strict_types=1);

class Rbac_GroupController extends Base\ViewController
{
    public array $cols = [
        ['data' => 'id'],
        ['data' => 'name'],
        ['data' => 'status'],
        ['data' => 'date_add'],
        ['data' => 'date_upd'],
    ];
}