<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeesTable extends Component
{
    use WithPagination;

    public $search = '';
    public $status = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'status' => ['except' => '']
    ];

    function mount(Request $request)
    {
        $this->search = $request->input('search');
    }

    public function updating()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.employees-table', [
            'employees' => Employee::whereRaw('CONCAT(`first_name`, `last_name`) LIKE ?', '%' . $this->search . '%')
                ->where(function($query) {
                    if($this->status == 'active')
                        $query->where('status', 1);
                    elseif($this->status == 'inactive')
                        $query->where('status', 0);
                })
                ->paginate(10)
                ->withQueryString()
        ]);
    }
}
