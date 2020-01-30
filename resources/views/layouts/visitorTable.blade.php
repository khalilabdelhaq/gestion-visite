                    <table>
                      <thead>
                          <tr>
                            <th> تسجيل الخروج </th>
                            <th>توقيت الخروج </th>
                            <th>توقيت الدخول</th>
                            <th>المصلحة المعنية</th>
                            <th>ب.ت.و</th>
                            <th>الإسم العائلي</th>
                            <th>الإسم الشخصي</th>
                            
                          </tr>
                      </thead>
                      <tbody>
                      @if (count($visitors)===0)
                      <tr><td>Aucun element trouvé</td></tr>
                      @else
                      @foreach ($visitors as $visitor)
                          <tr class="row0">
                            <td>
                            @if(!$visitor->sorti)
                            {{ Form::model($visitor, array('route' => array('visitors.update', $visitor->id), 'method' => 'PUT')) }}
                            {{ Form::hidden('sorti',true) }}
                            {{Form::submit('خروج',array('class' => 'buttonn'))}}
                            {{ Form::close() }}
                            @endif
                            </td>
                            <td>
                                @if($visitor->sorti)
                                {{$visitor->updated_at}}
                                @endif
                            </td>
                            <td>{{$visitor->created_at}}</td>
                            <td>{{$visitor->service}}</td>
                            <td>{{$visitor->cin}}</td>
                            <td>{{$visitor->nom}}</td>
                            <td>{{$visitor->prenom}}</td>
                          </tr>
                      @endforeach
                      @endif
                      </tbody>

                  </table>
                  <table>
                          <tr>
                              <td>                       
                              <b> Total: {{$visitors->total()}} visiteurs trouvés</b>
                              </td>
                              <td class="pagination">
                              {{ $visitors->links() }}
                              </td>
                          </tr>
                  </table>
                 