
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
                    <th style="width:70%">Objet</th>
                    <th>Destinataire</th>
                    <th></th>
                </tr></thead>
                <tbody>
                <? foreach($objects as $object): ?>
                    <tr>
                        <td><?php echo $object->Code ?></td>
                        <td><?php echo $object->Titre ?></td>
                        <td><?php echo $object->user2 ?></td>
                        <td>
                            <a class="ui vertical <?php if ($object->actif == 1): ?> blue <?php endif ?> animated button" href="<?php echo base_url('index.php/home/preter/' . $object->Code) ?>" style="width:110px;">
                              <div class="hidden content"><?php if ($object->actif == 1): ?> Réclamer <?php else: ?> Partager <?php endif ?></div>
                              <div class="visible content">
                                <i class="gift icon"></i>
                              </div>
                              <?php if ($object->actif == 1): ?>
                                <div class="ui right red corner label">
                                  <i class="heart icon"></i>
                                </div>
                              <?php endif ?>
                              
                            </a>
                            
                        </td>
                        
                    </tr>
                <? endforeach ?>
                </tbody>
                <tfoot>
                <tr><th colspan="4">
                        <a class="ui blue labeled icon button" href="<?php echo base_url('index.php/home/creerObjet/') ?>"><i class="add icon"></i> Ajouter un objet</a>
                    </th>
                </tr></tfoot>
            </table>
        </div>
    </div>
  </div>

</div>



