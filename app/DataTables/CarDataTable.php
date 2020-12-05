<?php

namespace App\DataTables;

use App\Models\Car;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CarDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function($data) {
                return $this->getActionColumn($data);
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\CarDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Car $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('cardatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(150)
                  ->addClass('text-center'),
            'type' => [
                'title' => 'Car Type'
            ],
            'car_company' => [
                'title' => 'Car Company'
            ],
            'car_no' => [
                'title' => 'Car Number'
            ],
            'price' => [
                'title' => 'Rental Cost'
            ],
            'remark' => [
                'title' => 'Remark'
            ]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Car_' . date('YmdHis');
    }

    protected function getActionColumn($data):string
    {
        $editUrl = route('cars.edit', $data->id);
        $deleteUrl = route('cars.destroy', $data->id);
        $delete_message = "Delete or not?";
        return "<a class='waves-effect btn btn-primary' data-value='$data->id' href='$editUrl'><span class='fa fa-edit'></span></a>
                <button class='waves-effect btn btn-danger confirm-delete' data-url='$deleteUrl' data-reload='true' data-message='$delete_message'><span class='fa fa-trash'></span></button>";
    }

}
