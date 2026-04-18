pipeline {
    agent any
    stages {
        stage('Install Dependencies') {
            steps {
                sh '''
                    docker run --rm --volumes-from jenkins \
                        -w ${WORKSPACE} \
                        php:8.2-cli bash -c "
                            curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer &&
                            composer install --no-interaction --prefer-dist
                        "
                '''
            }
        }
        stage('Run Tests') {
            steps {
                sh '''
                    docker run --rm --volumes-from jenkins \
                        -w ${WORKSPACE} \
                        php:8.2-cli bash -c "
                            cp .env.example .env &&
                            php artisan key:generate &&
                            php artisan test
                        "
                '''
            }
        }
    }
}
