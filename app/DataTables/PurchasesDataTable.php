<?php

namespace App\DataTables;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PurchasesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function($query){
                return view('user.buttons_compra',['purchase' => $query ]);
            })
            ->editColumn('total_price', function($query){
                return $query->total_price.'€';
            })
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Purchase $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Purchase $model): QueryBuilder
    {
        $usuario=Auth::user()->id;
        if (Auth::check() && Auth::user()->hasRole('admin')){
            $resul = $model->newQuery();
        }
        else{
            $resul = $model->newQuery()->where('user_id','=',$usuario);
        }
        return $resul;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('purchases-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        if (Auth::check() && Auth::user()->hasRole('admin')){
            return [
                Column::make('user_id')->title('USUARIO'),
                Column::make('direccion'),
                Column::make('codigo_postal'),
                Column::make('localidad'),
                Column::make('pais'),
                Column::make('telefono'),
                Column::make('total_price')->title('TOTAL'),
                Column::make('fecha_de_compra')->className('fechaCompra'),
                Column::computed('action')->title('VER PRODUCTOS')
                    ->exportable(false)
                    ->printable(false)
                    ->width(60)
                    ->addClass('text-center'),
            ];
        }
        else{
            return [
                Column::make('id')->title('Nº compra'),
                Column::make('direccion'),
                Column::make('codigo_postal'),
                Column::make('localidad'),
                Column::make('pais'),
                Column::make('telefono'),
                Column::make('total_price')->title('TOTAL'),
                Column::make('fecha_de_compra')->className('fechaCompra'),
                Column::computed('action')->title('VER PRODUCTOS')
                    ->exportable(false)
                    ->printable(false)
                    ->width(40)
                    ->addClass('text-center'),
            ];
        }

    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Purchases_' . date('YmdHis');
    }
}
