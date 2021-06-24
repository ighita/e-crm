@extends('layout')

@section('page-title', 'Dashboard')
@section('content')

<div class="graphs-grid">
    <div class="card is-graph">
        <div class="card-header">
            Stare Comenzi
        </div>
        <div class="card-body">
            <canvas id="ordersPie" class="rounded shadow"></canvas>
        </div>
    </div>

    <div class="card is-graph">
        <div class="card-header">
            Oportunitati
        </div>
        <div class="card-body">
            <canvas id="leadsPie" class="rounded shadow"></canvas>
        </div>
    </div>

    <div class="card is-graph">
        <div class="card-header">
            Prioritate Sarcini
        </div>
        <div class="card-body">
            <canvas id="tasksPie" class="rounded shadow"></canvas>
        </div>
    </div>

    <div class="card is-graph">
        <div class="card-header">
            Incasari/Cheltuieli
        </div>
        <div class="card-body">
            <canvas id="profitPie" class="rounded shadow"></canvas>
        </div>
    </div>
</div>

<div class="cards">

    <div class="card-single">
        <div>
            <h1>{{$clients->count()}}</h1>
            <span>Clienti</span>
        </div>
        <div>
            <span class="las la-coins"></span>
        </div>
    </div>

    <div class="card-single">
        <div>
            <h1>{{$people->count()}}</h1>
            <span>Persoane Contact</span>
        </div>
        <div>
            <span class="las la-users"></span>
        </div>
    </div>

    <div class="card-single">
        <div>
            <h1>{{$tasks->count()}}</h1>
            <span>Sarcini</span>
        </div>
        <div>
            <span class="las la-clipboard-list"></span>
        </div>
    </div>




    <div class="card-single">
        <div>
            <h1>{{$orders->sum('value')}} lei</h1>
            <span>Incasari</span>
        </div>
        <div>
            <span class="las la-coins"></span>
        </div>
    </div>

    <div class="card-single">
        <div>
            <h1>{{$costs->sum('value')}} lei</h1>
            <span>Cheltuieli</span>
        </div>
        <div>
            <span class="las la-coins"></span>
        </div>
    </div>



    <div class="card-single">
        <div>
            <h1>{{$leads->count()}}</h1>
            <span>Leaduri</span>
        </div>
        <div>
            <span class="las la-coins"></span>
        </div>
    </div>

    <div class="card-single">
        <div>
            <h1>{{$orders->sum('value')}} lei</h1>
            <span>Incasari</span>
        </div>
        <div>
            <span class="las la-coins"></span>
        </div>
    </div>

    <div class="card-single">
        <div>
            <h1>{{$orders->sum('value') - $costs->sum('value')}}  lei</h1>
            <span>Profit</span>
        </div>
        <div>
            <span class="las la-coins"></span>
        </div>
    </div>




</div>



<div class="recent-grid">
   <div class="projects">
    <div class="card">
        <div class="card-header">
            <h3>Comenzi noi</h3>

            <a href="/orders"><button>Vezi toate <span class="las la-arrow-right"></span></button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>Detalii comanda</td>
                            <td>Client</td>
                            <td>Valoare</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders->take(7) as $order)
                        <tr>
                            <td>{{$order->description}}</td>
                            <td>{{$order->client->name}}</td>
                            <td>{{$order->value}} lei</td>
                            <td>
                                {{-- <span class="status purple"></span> --}}
                                {{ Config::get('statuses.orders')[$order->status]}}
                            </td>
                        </tr>                           
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
   </div>
   <div class="customers">
        <div class="card">
            <div class="card-header">
                <h3>Contacte noi</h3>
                {{-- <button>Vezi toate <span class="las la-arrow-right"></span></button> --}}
            </div>
            <div class="card-body">
                @foreach ($people->take(5) as $person)
                <div class="customer">
                    <div class="info">
                        <img src="https://i.pravatar.cc/150?img={{mt_rand(1,65)}}" width="40px" height="40px" alt="">
                        <div>
                            <h4>{{$person->name}}</h4>
                            <small>{{$person->position}}</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>                   
                @endforeach




            </div>
        </div>
   </div> 
</div>

@endsection

@section('footer-scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
@endsection

@section('charts')
    <script>
           // Stare Comenzi
    var ctxPP = document.getElementById('ordersPie').getContext('2d');
    var ordersPieChart = new Chart(ctxPP, {
        type: 'doughnut',
        data: {
          labels: ["Pending", "WIP", "Done"],
          datasets: [{
            "data": [
                <?php echo 
                    $orders->where('status', 0)->count()  . ',' . 
                    $orders->where('status', 1)->count() . ',' .
                    $orders->where('status', 2)->count();
                ?>
            ],
            "backgroundColor": ["hsl(338deg 72% 53%", "hsl(338deg 66% 41%)", "hsl(338deg 72% 87%);"]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
      //Boolean - Whether we should show a stroke on each segment
      // set to false to hide the space/line between segments
      // segmentShowStroke: false,
      elements: {
            arc: {
                borderWidth: 0
            }
        },
        
        } 
    });


              // Leads Status
              var ctxPP = document.getElementById('leadsPie').getContext('2d');
    var leadsPieChart = new Chart(ctxPP, {
        type: 'doughnut',
        data: {
          labels: ["Prospect", "Oportunitate", "Lead"],
          datasets: [{
            "data": [
                <?php echo 
                    $leads->where('status', 0)->count()  . ',' . 
                    $leads->where('status', 1)->count() . ',' .
                    $leads->where('status', 2)->count();
                ?>
            ],
            "backgroundColor": ["#DD2F6E", "#0000F0", "#0EB01A"]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
      //Boolean - Whether we should show a stroke on each segment
      // set to false to hide the space/line between segments
      // segmentShowStroke: false,
      elements: {
            arc: {
                borderWidth: 0
            }
        },
        
        } 
    });




                  // Tasks Status
                  var ctxPP = document.getElementById('tasksPie').getContext('2d');
    var tasksPieChart = new Chart(ctxPP, {
        type: 'doughnut',
        data: {
          labels: ["Scazuta", "Medie", "Urgent"],
          datasets: [{
            "data": [
                <?php echo 
                    $tasks->where('priority', 0)->count()  . ',' . 
                    $tasks->where('priority', 1)->count() . ',' .
                    $tasks->where('priority', 2)->count();
                ?>
            ],
            "backgroundColor": ["#7FD7D9", "#8CDE8B", "#DD2F6E"]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
      //Boolean - Whether we should show a stroke on each segment
      // set to false to hide the space/line between segments
      // segmentShowStroke: false,
      elements: {
            arc: {
                borderWidth: 0
            }
        },
        
        } 
    });



                     // Profit Status
                     var ctxPP = document.getElementById('profitPie').getContext('2d');
    var tasksPieChart = new Chart(ctxPP, {
        type: 'pie',
        data: {
          labels: ["Incasari", "Cheltuieli"],
          datasets: [{
            "data": [
                <?php echo 
                    $orders->sum('value')  . ',' . 
                    $costs->sum('value')   . ',';
                ?>
            ],
            "backgroundColor": ["#ffa600", "red"]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
      //Boolean - Whether we should show a stroke on each segment
      // set to false to hide the space/line between segments
      // segmentShowStroke: false,
      elements: {
            arc: {
                borderWidth: 0
            }
        },
        
        } 
    });




    </script>
@endsection
