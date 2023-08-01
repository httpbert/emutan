@extends('templates.dashboard_user')

@section('dashboard-side')
    <div class="group-dashboard-right d-flex flex-column p-5">
        <span class="text-black fw-bold">Transaksi</span>

        <div class="card p-1" style="width: 100%; background: #f7f7f7;">
            <div class="card-header d-flex">
                <div class="tbl-left">
                    <form>
                        <label>Show</label>
                        <select>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <label>entries</label>
                    </form>
                </div>
                <div class="btn-right ms-auto">
                    <form>
                        <label>Search:</label>
                        <input type="text" class="rounded m-1 p-1">
                    </form>
                </div>
            </div>
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>No. Invoice</th>
                        <th>Nominal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>7 Juli 2023</td>
                        <td>E-128103813131937</td>
                        <td>Rp 200.000</td>
                        <td><button class="btn btn-success btn-sm">Berhasil</button></td>
                        <td><button class="btn btn-warning btn-sm">Detail</button></td>
                    </tr>
                </tbody>
            </table>
            <div class="card-header d-flex">
                <div class="tbl-left">
                    <label>Showing 1 to 1 of 1 entries</label>
                </div>
                <div class="btn-right ms-auto">
                    <label>Previous</label>
                    <button disabled="disabled" class="p-1 bg-light">1</button>
                    <label>Next</label>
                </div>
            </div>
        </div>
    </div>
@endsection
