@extends('layout.frontend.app')
@section('content')
            <div class="row">
            </div>
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Total Peminjaman</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">3</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-book-plus text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Total Dikembalikan</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">2</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-book-remove text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Total Buku</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">7</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-book-open-page-variant text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                            </th>
                            <th class="text-white"> NAMA </th>
                            <th class="text-white"> JUDUL BUKU </th>
                            <th class="text-white"> TANGGAL PINJAM </th>
                            <th class="text-white"> TANGGAL JATUH TEMPO </th>
                            <th class="text-white"> STATUS </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 
                            </td>
                            <td>
                              <img src="assets/images/faces/WA.jpg" alt="image" />
                              <span class="pl-2 text-white">Ahmad Syahril</span>
                            </td>
                            <td class="text-white"> Filosofi Teras </td>
                            <td class="text-white"> 13-04-2026 </td>
                            <td class="text-white"> 13-04-2026 </td>
                            <td>
                              <div class="badge badge-outline-warning">Pending</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                            </td>
                            <td>
                              <img src="assets/images/faces/WA.jpg" alt="image" />
                              <span class="pl-2 text-white">Bayu Raditia</span>
                            </td>
                            <td class="text-white"> Kamus Bahasa Inggris </td>
                            <td class="text-white"> 14-04-2026 </td>
                            <td class="text-white"> 14-04-2026 </td>
                            <td>
                              <div class="badge badge-outline-danger">Ditolak</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                            </td>
                            <td>
                              <img src="assets/images/faces/WA.jpg" alt="image" />
                              <span class="pl-2 text-white">Anis Yuda</span>
                            </td>
                            <td class="text-white"> Bu Aku Ingin Pelukmu </td>
                            <td class="text-white"> 14-04-2026 </td>
                            <td class="text-white"> 14-04-2026 </td>
                            <td>
                              <div class="badge badge-outline-primary">Dipinjam</div>
                          </td>
                          </tr>
                          <tr>
                          <td>
                         </td>
                         </tr>
                          <tr>
                          <td>
                          </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection