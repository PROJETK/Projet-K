
    
    
<div class="ui grid">
  <div class="two wide column">
    <!-- Bordel je trouve pas comment appliquer un offset -->
  </div>

  <div class="twelve wide column">
    <div class="ui segment">
        <div class="container">
            <table class="ui table segment">
                <thead>
                <tr><th>id</th>
                    <th style="width:80%">Objet</th>
                    <th></th>
                </tr></thead>
                <tbody>
                <? foreach($objects as $object): ?>
                    <tr>
                        <td><?php echo $object->Code ?></td>
                        <td><?php echo $object->Titre ?></td>
                        <td>
                            <a class="ui vertical animated button" href="<?php echo base_url('index.php/home/preter/' . $object->Code) ?>" style="width:110px;">
                              <div class="hidden content">Partager</div>
                              <div class="visible content">
                                <i class="gift icon"></i>
                              </div>
                            </a>
                        </td>
                    </tr>
                <? endforeach ?>
                </tbody>
                <tfoot>
                <tr><th colspan="3">
                        <div class="ui blue labeled icon button"><i class="add icon"></i> Ajouter un objet</div>
                    </th>
                </tr></tfoot>
            </table>
        </div>
    </div>
  </div>

</div>



