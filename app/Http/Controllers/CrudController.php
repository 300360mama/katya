<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use InfoDB;
use App\Images;

class CrudController extends Controller
{
    private $default_table = "articles";

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $tables = InfoDB::getTables();

        return view("crud.show_tables", ["tables" => $tables]);

    }

    public function delete(Request $request)
    {
        if ($request->ajax() || $request->isMethod("post")) {
            $id = $request->id_row;
            $table = $request->table ? $request->table : 'articles';
            $tableModel = InfoDB::getTableModel($table);
            $row = $tableModel->find($id);
            $res = $row->delete();

            $message = $res ? "Delete successfull" : "Delete error";
            $response = [
                "result" => $res,
                "message" => $message,
            ];
            return json_encode($response);
        }
    }

    public function update(Request $request)
    {

        $table = $request->table ? $request->table : $this->default_table;
        $res = false;
        $message = "Update failed";
        $response = [
            "result" => $res,
            "message" => $message,
        ];

        $tableModel = InfoDB::getTableModel($table)->find($request->id);
        $message = "Update error";
        $fields = $request->all();
        $res = false;

        dump($_FILES);

        if ($request->ajax() || $request->isMethod("post")) {
            foreach ($fields as $name => $field) {
                if ($tableModel->$name) {
                    $tableModel->$name = $field;
                }
            }

            $tableModel->updated_at = time();
            $isSave = $tableModel->save();

            if ($isSave) {
                $res = true;
                $message = "Update successful";
            }

            $response = [
                "result" => $res,
                "message" => $message,
            ];
            return json_encode($response);
        }

        return json_encode($response);
    }

    public function create(Request $request)
    {

        if ($request->ajax() || $request->isMethod("post")) {
            $table = $request->table ? $request->table : $this->default_table;
            $columns = InfoDB::getColumnName($table);
            $tableModel = InfoDB::getTableModel($table);
            $fields = $request->all();
            $res = false;

            $message = "Create failed";

            foreach ($fields as $name => $field) {
                if (!in_array($name, $columns)) {
                    continue;
                }

                $tableModel->$name = $request->$name;
            }

            $tableModel->created_at = time();
            $tableModel->updated_at = time();
            $isSave = $tableModel->save();

            if ($isSave) {
                $res = true;
                $message = "Create successful";
            }

            $response = [
                "result" => $res,
                "message" => $message,
            ];

            return json_encode($response);
        }
    }

    public function read(Request $request)
    {

        $table = $request->table ? $request->table : 'articles';
        $tableModel = InfoDB::getTableModel($table);

        $fields = $tableModel::all()->toArray();

        return view("crud.read", [
            "values" => $fields,
            "table" => $table,

        ]);
    }

    public function show(Request $request)
    {

        $table = $request->table ? $request->table : $this->default_table;

        $relationships = InfoDB::getRelationshipsValue($table);

        $tableModel = InfoDB::getTableModel($table);

        $fields = $tableModel->find($request->id_row)->toArray();

        return view("crud.update", [
            "fields" => $fields,
            "relationships" => $relationships,
            "table" => $table,
        ]);
    }

    public function addNewRow(Request $request)
    {
        $table = $request->table ? $request->table : $this->default_table;
        $fields = InfoDB::getColumnName($table);
        $relationships = InfoDB::getRelationshipsValue($table);

        return view("crud.create", [
            "table" => $table,
            "fields" => $fields,
            "relationships" => $relationships,
        ]);
    }
}
