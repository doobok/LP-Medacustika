@setup
  // user on web-server
  $user = 'yura';

  $timezone = 'Europe/Kiev';

  // path to the directory on web-server
  $path = '/var/www/landx';

  $curent = $path . '/current';

  // git repository ssh-link
  $repo = "git@landx:doobok/LP-Medacustika.git";

  $branch = 'master';

  // directory and files with chmod 775
  $chmods = [
    'storage/logs',
    'public',
    'storage/app/public'
  ];

  $date = new DateTime('now', new DateTimeZone($timezone));
  $release = $path .'/releases/'. $date->format('YmdHis');
@endsetup

@servers(['production' => $user . '@178.20.157.125'])

@task('clone', ['on' => $on])
  mkdir -p {{ $release }}

  git clone --depth 1 -b {{ $branch }} "{{ $repo }}" {{ $release }}

  echo "#1 - Repository has been cloned"
@endtask

{{-- Runs a fresh installation --}}
@task('composer', ['on' => $on])
  cd {{ $release }}

  ln -nfs {{ $path }}/.env .env;
  chgrp -h www-data .env;

  composer install --no-interaction --no-dev --prefer-dist

  echo "#2 - Composer dependencies have been installed"
@endtask

{{-- Updates composer, then runs a fresh installations--}}
@task('artisan', ['on' => $on])
  cd {{ $release }}

  php artisan config:clear

  {{-- php artisan migrate
  php artisan clear-compiled --env=production; --}}

  echo "#3 - Production dependencies have been instaled"
@endtask

{{-- Set premissions for varios files and directories --}}
@task('chmod', ['on' => $on])

  chgrp -R www-data {{ $release }};
  chmod -R ug+rwx {{ $release }};


  @foreach ($chmods as $file)
    chmod -R 775 {{ $release }}/{{ $file }}

    chown -R {{ $user }}:www-data {{ $release }}/{{ $file }}

    echo "Premissions have been set for {{ $file }}"
  @endforeach

  echo "#4 - Premissions has been set"
@endtask

@task('update_symlinks')
  ln -nfs {{ $release }} {{ $curent }};
  chgrp -h www-data {{ $curent }};

  echo "#5 - Symlink has been set"
@endtask


{{-- Remove old releases --}}
@task('del_old_releases')
  cd {{ $path .'/releases' }}

  ls -F | head -n -3 | xargs rm -r;

  echo "#8 - old releases has been deleted"
@endtask

{{-- Run all deployment tasks --}}
@macro('deploy', ['on' => 'production'])
  clone
  composer
  artisan
  chmod
  update_symlinks
@endmacro
