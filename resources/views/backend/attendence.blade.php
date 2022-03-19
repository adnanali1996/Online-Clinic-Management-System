@extends('backend.layouts.master_layouts')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Attendance Sheet</h4>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Employee Name</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Select Month</label>
                            <select class="select floating">
                                <option>-</option>
                                <option>Jan</option>
                                <option>Feb</option>
                                <option>Mar</option>
                                <option>Apr</option>
                                <option>May</option>
                                <option>Jun</option>
                                <option>Jul</option>
                                <option>Aug</option>
                                <option>Sep</option>
                                <option>Oct</option>
                                <option>Nov</option>
                                <option>Dec</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Select Year</label>
                            <select class="select floating">
                                <option>-</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
						<div class="table-responsive">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Employee</th>
                                        <th data-toggle="tooltip" data-placement="top" title="Sunday">1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                        <th>11</th>
                                        <th>12</th>
                                        <th>13</th>
                                        <th>14</th>
                                        <th>15</th>
                                        <th>16</th>
                                        <th>17</th>
                                        <th>18</th>
                                        <th>19</th>
                                        <th>20</th>
                                        <th>22</th>
                                        <th>23</th>
                                        <th>24</th>
                                        <th>25</th>
                                        <th>26</th>
                                        <th>27</th>
                                        <th>28</th>
                                        <th>29</th>
                                        <th>30</th>
                                        <th>31</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Albina Simonis</td>
                                        <td>
                                        <i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td>
                                            <div class="half-day"><span class="first-off"><i class="fa fa-check text-success"></i></span> <span class="first-off"><i class="fa fa-close text-danger"></i></span></div>
                                        </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td>
                                            <div class="half-day"><span class="first-off"><i class="fa fa-close text-danger"></i></span> <span class="first-off"><i class="fa fa-check text-success"></i></span></div>
                                        </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Cristina Groves</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Haylie Feeney</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Mary Mericle</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Zoe Butler</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Cristina Groves</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Marie Wells</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Henry Daniels</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Mark Hunter</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Michael Sullivan</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                </tbody>
                            </table>
						</div>
                    </div>
                </div>
            </div>
@endsection