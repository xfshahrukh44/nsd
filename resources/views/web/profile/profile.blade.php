@extends('web.layouts.master')

@section('content')

<div class="container-fluid text-center adminNDB">
        <div class="row">
            <!-- <div class="col-lg-12 ">
                <div class="logo">
                    <img src="{{asset('img/SVG/fab.svg')}}" height="" width="" alt="">
                </div>
            </div> -->
            <div class="col-lg-12">
                <h1>User Profile</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-pills nav-stacked mt5">
                    <li class="active"><a data-toggle="tab" href="#tab1">Profile</a></li>
                    <li><a data-toggle="tab" href="#tab2">Info</a></li>
                    <li><a data-toggle="tab" href="#tab3">kicking long snapping coach</a></li>
                    <li><a data-toggle="tab"  href="#tab4">STAR RATINGS</a></li>
                    <li><a data-toggle="tab" href="#tab5">season stats</a></li>
                    <li><a data-toggle="tab" href="#tab6">VIDEOS</a></li>
                    <li><a data-toggle="tab" href="#tab7" id="reserLink">Password Reset</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <!-- <div class="col-lg-12">
                    <div class="fakeTabs">
                        <div class="item">1</div>
                        <div class="item">2</div>
                        <div class="item">3</div>
                        <div class="item">4</div>
                        <div class="item">5</div>
                        <div class="item">6</div>
                    </div>
                </div> -->
                <div class="col-lg-12">
                        <div class="tab-content mt5">
                            <div id="tab1" class="tab-pane fade in active">
                              <div class="card">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>
                                            Profile
                                        </h2>   
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="form-group col-lg-12"> 
                                                <div class="img-picker"></div>
                                            </div> 
                                        </div>
                                        <div class="row mt1">
                                            <div class="rate">
                                                <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                                                <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                                <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                                <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                                <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                                <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                                <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                                <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                                <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                                                <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="row">
                                            <div class="col-lg-4 mt3">
                                                <label for="" class="clabel">First Name</label>
                                                <input type="text" placeholder="First Name" >
                                            </div>
                                            <div class="col-lg-4 mt3">
                                                <label for="" class="clabel">Last Name</label>
                                                <input type="text" placeholder="Last Name" >
                                            </div>
                                            <div class="col-lg-4 mt3">
                                                <label for="" class="clabel">Type</label>
                                                <input type="text" placeholder="Type" readonly>
                                                <!-- <select name="" id="">
                                                    <option value="Kicker">Kicker</option>
                                                    <option value="Punter">Punter</option>
                                                    <option value="Longsnapper">Longsnapper</option>
                                                </select> -->
                                            </div>
                                            <!-- <div class="col-lg-4"><input type="text" placeholder="Rating" ></div> -->
                                        </div> 
                                        <div class="row ">
                                            <div class="col-lg-4 mt3">
                                                <label for="" class="clabel">Username</label>
                                                <input type="text" placeholder="Username" >
                                            </div>
                                            <div class="col-lg-4 mt3"><label for="" class="clabel">Email</label><input type="email" placeholder="Email" readonly></div>
                                            <div class="col-lg-4 mt3">
                                                <label for="" class="clabel">Subcription</label>
                                                <input type="text" placeholder="Monthly" readonly>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-12 mt3">
                                                <label for="" class="clabel">Description</label>
                                                <textarea name="" id="" cols="30" rows="5" placeholder="Description" ></textarea>
                                            </div>
                                        </div>
                                        
                                </div> 
                                </div>
                              </div>
                                <!-- <div class="btnDiv">
                                    <button style="visibility:hidden">Previous</button>
                                    <a onclick="changeTab('tab2','tab1')"><button>Next</button></a>
                                </div> -->
                            </div>
                            <div id="tab2" class="tab-pane fade " >
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>
                                               Info
                                            </h2>   
                                       </div>
                                       <div class="col-lg-12 ">
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">Twitter Handle</label><input type="text" placeholder="Twitter Handle" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">Instagram Handle</label><input type="text" placeholder="Instagram Handle" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">Jersey #</label><input type="text" placeholder="Jersey #" ></div>
                                       </div>
                                       <div class="col-lg-12 ">
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">Specialist Position</label><input type="text" placeholder="Specialist Position" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">Grad Year</label><input type="text" placeholder="Grad Year" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">State</label><input type="text" placeholder="State" ></div>
                                       </div>
                                       <div class="col-lg-12 ">
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">High School</label><input type="text" placeholder="High School" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">Height</label><input type="text" placeholder="Height" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">Weight</label><input type="text" placeholder="Weight" ></div>
                                       </div>
                                       <div class="col-lg-12 ">
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">Other FB Positions</label><input type="text" placeholder="Other FB Positions" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">Other Sports</label><input type="text" placeholder="Other Sports" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">College Degrees of Interest</label><input type="text" placeholder="College Degrees of Interest" ></div>
                                       </div>
                                       <div class="col-lg-12 ">
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">GPA</label><input type="text" placeholder="GPA" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">ACT</label><input type="text" placeholder="ACT" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">SAT</label><input type="text" placeholder="SAT" ></div>
                                       </div>
                                       <div class="col-lg-12 ">
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">NCAA ID</label><input type="text" placeholder="NCAA ID" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">Class Rank</label><input type="text" placeholder="Class Rank" ></div>
                                        <div class="col-lg-4 mt3"><label for="" class="clabel">Class Rank Percentile</label><input type="text" placeholder="Class Rank Percentile" ></div>
                                       </div>
                                    </div>
                                </div>
                                    <!-- <div class="btnDiv">
                                        <a  onclick="changeTab('tab1','tab2')"><button>Previous</button></a>
                                        <a  onclick="changeTab('tab3','tab2')"><button>Next</button></a>
                                    </div> -->
                            </div>
                            <div id="tab3" class="tab-pane fade " >
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>
                                               Coaches
                                            </h2>   
                                       </div>
                                       
                                        <div class="col-lg-12 mt3"><label for="" class="clabel">Coach 01</label><input type="text" placeholder="Coach 01" ></div>
                                        <div class="col-lg-12 mt3"><label for="" class="clabel">Coach 02</label><input type="text" placeholder="Coach 02" ></div>
                                        <div class="col-lg-12 mt3"><label for="" class="clabel">Coach 03</label><input type="text" placeholder="Coach 03" ></div>
                                       
                                    </div>
                                </div>
                                <!-- <div class="btnDiv">
                                    <a  onclick="changeTab('tab2','tab3')"><button>Previous</button></a>
                                    <a  onclick="changeTab('tab4','tab3')"><button>Next</button></a>
                                </div> -->
                            </div>
                            <div id="tab4" class="tab-pane fade " >
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-12 dfl">
                                            <h2>
                                                Ratings
                                            </h2>
                                            <span class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#starRatingCreateModal"></span>
                                        </div>
                                        <div class="col-lg-12 hudlSc" style="overflow: scroll;">
                                            <table class="table table-striped mt5">
                                                <thead>
                                                  <tr >
                                                    <th class="text-center" scope="col">ID</th>
                                                    <th class="text-center" scope="col">Club Name</th>
                                                    <th class="text-center" scope="col">Last Attend</th>
                                                    <th class="text-center" scope="col">Rating</th>
                                                    <th class="text-center" scope="col">Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        Kohls Kicking
                                                    </td>
                                                    <td>02/02/2020</td>
                                                    <td>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#starRatingCreateModal"><span class="glyphicon glyphicon-edit"></span></button>
                                                        <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                                    <!-- <div class="btnDiv">
                                        <a  onclick="changeTab('tab3','tab4')"><button>Previous</button></a>
                                        <a  onclick="changeTab('tab5','tab4')"><button>Next</button></a>
                                    </div> -->
                            </div>
                            <div id="tab5" class="tab-pane fade " >
                                <div class="card">
                                    <div class="row">
                                        <!-- SENIOR STATS -->
                                        <div class="col-lg-12 dfl">
                                            <h2>
                                                SENIOR STATS
                                            </h2>
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </div>
                                        <div class="col-lg-12 bottomLine">
                                            <div class="staeSec">
                                                <div class="col-lg-12 mt5 smzp"  >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>PAT’s :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 X For X
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>FG :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 X For X
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Longest</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>KO's :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 <div>No. of Ko's</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Total Yardage</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>KO Average</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Touchbacks</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>Punts :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 <div>No. of Punts</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Punts Average</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Longest Punts</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Total Yardage</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>1-20</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <!-- snaps -->
                                                <div class="col-lg-12  mt5 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>40 Yard Dash :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                            <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>PAT Snaps :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                             <div>No. of Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                         <div class="xforchild">
                                                             <div>% of Perfect Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>Punt Snaps :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                             <div>No. of Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                         <div class="xforchild">
                                                             <div>% of Perfect Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                             </div>
                                        </div>

                                        <!-- JUNIOR STATS -->
                                        <div class="col-lg-12 mt8 dfl">
                                            <h2>
                                                JUNIOR STATS
                                            </h2>
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </div>
                                        <div class="col-lg-12 bottomLine">
                                            <div class="staeSec">
                                                <div class="col-lg-12 mt5 smzp"  >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>PAT’s :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 X For X
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>FG :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 X For X
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Longest</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>KO's :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 <div>No. of Ko's</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Total Yardage</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>KO Average</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Touchbacks</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>Punts :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 <div>No. of Punts</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Punts Average</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Longest Punts</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Total Yardage</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>1-20</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <!-- snaps -->
                                                <div class="col-lg-12  mt5 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>40 Yard Dash :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                            <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>PAT Snaps :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                             <div>No. of Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                         <div class="xforchild">
                                                             <div>% of Perfect Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>Punt Snaps :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                             <div>No. of Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                         <div class="xforchild">
                                                             <div>% of Perfect Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                             </div>
                                        </div>

                                        <!-- SOPHOMORE YEAR -->
                                        <div class="col-lg-12 mt8 dfl">
                                            <h2>
                                                SOPHOMORE YEAR
                                            </h2>
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </div>
                                        <div class="col-lg-12 bottomLine">
                                            <div class="staeSec">
                                                <div class="col-lg-12 mt5 smzp"  >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>PAT’s :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 X For X
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>FG :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 X For X
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Longest</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>KO's :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 <div>No. of Ko's</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Total Yardage</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>KO Average</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Touchbacks</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>Punts :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 <div>No. of Punts</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Punts Average</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Longest Punts</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Total Yardage</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>1-20</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <!-- snaps -->
                                                <div class="col-lg-12  mt5 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>40 Yard Dash :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                            <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>PAT Snaps :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                             <div>No. of Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                         <div class="xforchild">
                                                             <div>% of Perfect Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>Punt Snaps :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                             <div>No. of Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                         <div class="xforchild">
                                                             <div>% of Perfect Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                             </div>
                                        </div>

                                        <!-- FRESHMAN YEAR -->
                                        <div class="col-lg-12 mt8 dfl">
                                            <h2>
                                                FRESHMAN YEAR
                                            </h2>
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </div>
                                        <div class="col-lg-12 bottomLine">
                                            <div class="staeSec">
                                                <div class="col-lg-12 mt5 smzp"  >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>PAT’s :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 X For X
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>FG :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 X For X
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Longest</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>KO's :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 <div>No. of Ko's</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Total Yardage</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>KO Average</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Touchbacks</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left">
                                                         <h5>Punts :</h5>
                                                     </div>
                                                     <div class="right">
                                                         <div class="xforx">
                                                             <div class="xforchild">
                                                                 <div>No. of Punts</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Punts Average</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Longest Punts</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>Total Yardage</div> <input type="number" placeholder="102">
                                                             </div>
                                                             <div class="xforchild">
                                                                 <div>1-20</div> <input type="number" placeholder="102">
                                                             </div>
                                                         </div>
                                                         <div class="inpSec mt-10">
                                                             <textarea name="" id="" cols="30" rows="3" placeholder="Comments"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <!-- snaps -->
                                                <div class="col-lg-12  mt5 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>40 Yard Dash :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                            <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>PAT Snaps :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                             <div>No. of Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                         <div class="xforchild">
                                                             <div>% of Perfect Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                                <div class="col-lg-12 mt-10 smzp" >
                                                 <div class="jnone">
                                                     <div class="left2">
                                                         <h5>Punt Snaps :</h5>
                                                     </div>
                                                     <div class="right2">
                                                         <div class="xforchild">
                                                             <div>No. of Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                         <div class="xforchild">
                                                             <div>% of Perfect Snaps</div> <input type="number" placeholder="102">
                                                         </div>
                                                     </div>
                                                 </div>
                                                </div>
                                             </div>
                                        </div>

                                         <!-- JUNIOR DAYS -->
                                         <div class="col-lg-12 mt8 dfl">
                                            <h2>
                                                JUNIOR DAYS
                                            </h2>
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="txtArea mt3" >
                                                <textarea name="" id="" cols="30" rows="3" class="" placeholder="Played in junior Days If..."></textarea>
                                            </div>
                                            <div class="txtArea mt2" >
                                                <textarea name="" id="" cols="30" rows="3" class="" placeholder="Played in junior Days If..."></textarea>
                                            </div>
                                        </div>

                                        <!-- OFFERS -->
                                        <div class="col-lg-12 mt3 dfl">
                                            <h2>
                                                OFFERS
                                            </h2>
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="txtArea mt3" >
                                                <textarea name="" id="" cols="30" rows="3" class="" placeholder="If got an offer from any state/university"></textarea>
                                            </div>
                                            <div class="txtArea mt2" >
                                                <textarea name="" id="" cols="30" rows="3" class="" placeholder="If got an offer from any state/university"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- <div class="btnDiv">
                                        <a  onclick="changeTab('tab4','tab5')"><button>Previous</button></a>
                                        <a  onclick="changeTab('tab6','tab5')"><button>Next</button></a>
                                    </div> -->
                            </div>
                            <div id="tab6" class="tab-pane fade " >
                                <div class="card videost">
                                    <div class="row">
                                        <div class="col-lg-12 dfl">
                                            <h2>
                                                VIDEOS
                                            </h2>
                                            <span class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#VideoCreateModal"></span>
                                        </div>
                                        <div class="col-lg-12 hudlSc" style="overflow: scroll;">
                                            <table class="table table-striped mt5">
                                                <thead>
                                                  <tr >
                                                    <th class="text-center" scope="col">ID</th>
                                                    <th class="text-center" scope="col">Title</th>
                                                    <th class="text-center" scope="col">Category</th>
                                                    <th class="text-center" scope="col">Link</th>
                                                    <th class="text-center" scope="col">Thumbnail</th>
                                                    <th class="text-center" scope="col">Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        sebastian's 2020 football highlights
                                                    </td>
                                                    <td>HUDL</td>
                                                    <td>
                                                        <a href="https://www.youtube.com/watch?v=b8OdSYvsfoc" target="_blank">
                                                            https://www.youtube.com/watch?v=b8OdSYvsfoc
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="img">
                                                            <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/116123021/original/8f6b4ddc50fc5cb046312179b968a05878a1c853/create-youtube-banners-and-thumbnails.jpg" height="" width="" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#VideoCreateModal"><span class="glyphicon glyphicon-edit"></span></button>
                                                        <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        sebastian's 2020 football highlights
                                                    </td>
                                                    <td>HUDL</td>
                                                    <td>
                                                        <a href="https://www.youtube.com/watch?v=b8OdSYvsfoc" target="_blank">
                                                            https://www.youtube.com/watch?v=b8OdSYvsfoc
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="img">
                                                            <img src="https://i.ytimg.com/vi/tH5DX8CFCx8/maxresdefault.jpg" height="" width="" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#VideoCreateModal"><span class="glyphicon glyphicon-edit"></span></button>
                                                        <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        sebastian's 2020 football highlights
                                                    </td>
                                                    <td>HUDL</td>
                                                    <td>
                                                        <a href="https://www.youtube.com/watch?v=b8OdSYvsfoc" target="_blank">
                                                            https://www.youtube.com/watch?v=b8OdSYvsfoc
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="img">
                                                            <img src="https://i.vimeocdn.com/filter/overlay?src0=https%3A%2F%2Fi.vimeocdn.com%2Fvideo%2F833718800_1280x720.jpg&src1=https%3A%2F%2Ff.vimeocdn.com%2Fimages_v6%2Fshare%2Fplay_icon_overlay.png" height="" width="" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#VideoCreateModal"><span class="glyphicon glyphicon-edit"></span></button>
                                                        <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                                    <!-- <div class="btnDiv">
                                        <a onclick="changeTab('tab5','tab6')"><button>Previous</button></a>
                                        <a ><button>Finish</button></a>
                                    </div> -->
                            </div>
                            <div id="tab7" class="tab-pane fade ">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-4 col-lg-offset-4 ">
                                            <div class="row">
                                                <div class="reserPass">
                                                 <div class="col-lg-12">
                                                     <h2>
                                                         Reset Password
                                                     </h2>   
                                                 </div>
                                                 <div class="">
                                                     <form action="">
                                                         <div class="col-lg-12 mt3"><input type="text" placeholder="New Password"/></div>
                                                         <div class="col-lg-12 mt3"><input type="text" placeholder="Confirm Password"/></div>
                                                         <button type="submit" class="btn btnReset mt2">Save</button>
                                                     </form>
                                                 </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btnDiv mainSave">
                                <a><button>Save</button></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade adminNDB" id="VideoCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mhed">
                        <div style="flex:50%">
                            <h5 class="modal-title" id="exampleModalLabel">Add Videos</h5>
                        </div>
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 mt3">
                        <input type="text" name="" id="" placeholder="Title">
                    </div>
                    <div class="col-lg-6 mt3">
                    <select name="" id="">
                        <option value="HUDL">HUDL</option>
                        <option value="CAMP VIDEOS">CAMP VIDEOS</option>
                        <option value="TRAINING VIDEOS">TRAINING VIDEOS</option>
                    </select>
                </div>
                <div class="col-lg-12 mt3">
                    <input type="text" name="" id="" placeholder="Video Link">
                </div>
                <div class="col-lg-12 mt3">
                    <input type="file" accept="image/*" onchange="loadFile(event)" id="thumbnailInp">
                    <div class="fakeInpthum">
                        <p>No File Chossen</p>
                        <button class="btn">Upload</button>
                    </div>
                    <img id="output" width="100%" height=""/>
                    </div>
                </div>
                <button class="saveBtn mt1">Save</button>
            </div>
        </div>
        </div>
    </div>


    <!-- ratingModal -->
    <div class="modal fade adminNDB" id="starRatingCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mhed">
                        <div style="flex:50%">
                            <h5 class="modal-title" id="exampleModalLabel">Star Rating</h5>
                        </div>
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="row" id="clubrating">
                            <div class="col-lg-12">
                                <div class="col-lg-12 mt3"><input type="text" placeholder="Club Name" ></div>
                                <div class="col-lg-12 mt3">
                                    <div class="ratingInp">
                                    <label>Rating</label>
                                        <div class="rate">
                                            <input type="radio" id="rating10D" name="rating" value="10" /><label for="rating10D" title="5 stars"></label>
                                            <input type="radio" id="rating9D" name="rating" value="9" /><label class="half" for="rating9D" title="4 1/2 stars"></label>
                                            <input type="radio" id="rating8D" name="rating" value="8" /><label for="rating8D" title="4 stars"></label>
                                            <input type="radio" id="rating7D" name="rating" value="7" /><label class="half" for="rating7D" title="3 1/2 stars"></label>
                                            <input type="radio" id="rating6D" name="rating" value="6" /><label for="rating6D" title="3 stars"></label>
                                            <input type="radio" id="rating5D" name="rating" value="5" /><label class="half" for="rating5D" title="2 1/2 stars"></label>
                                            <input type="radio" id="rating4D" name="rating" value="4" /><label for="rating4D" title="2 stars"></label>
                                            <input type="radio" id="rating3D" name="rating" value="3" /><label class="half" for="rating3D" title="1 1/2 stars"></label>
                                            <input type="radio" id="rating2D" name="rating" value="2" /><label for="rating2D" title="1 star"></label>
                                            <input type="radio" id="rating1D" name="rating" value="1" /><label class="half" for="rating1D" title="1/2 star"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt3"><input type="text" placeholder="Last attended" ></div>
                                </div>
                        </div>
                    </div>
    <!-- 
                    <div class="col-lg-12 mt4">
                        <button class="btn btn-block addClub">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </div> -->
                </div> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <button class="saveBtn mt1">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection