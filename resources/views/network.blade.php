@extends('_layouts.basev2')

@section('titulo','Rede de indicações')
@section('page', 'Indique / Arvore de Indicações')

<script type="text/javascript">
   $(function () {
    $('.genealogy-tree ul').hide();
    $('.genealogy-tree>ul').show();
    $('.genealogy-tree ul.active').show();
    $('.genealogy-tree li').on('click', function (e) {
        var children = $(this).find('> ul');
        if (children.is(":visible")) children.hide('fast').removeClass('active');
        else children.show('fast').addClass('active');
        e.stopPropagation();
    });
});

</script>

@section('conteudo')
        @include('_sections.rede')
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
   $(function () {
         $('.genealogy-tree ul').hide();
         $('.genealogy-tree>ul').show();
         $('.genealogy-tree ul.active').show();
         $('.genealogy-tree li').on('click', function (e) {
               var children = $(this).find('> ul');
               if (children.is(":visible")) children.hide('fast').removeClass('active');
               else children.show('fast').addClass('active');
               e.stopPropagation();
         });
   });
</script>
