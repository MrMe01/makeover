<?php
use App\User;
use App\Models\Branch;
use App\Models\BranchComment;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Employee;
use App\Models\EmployeeComment;
use App\Models\Freedate;
use App\Models\Freehour;
use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Brand::truncate();
        Branch::truncate();
        Category::truncate();
        Service::truncate();
        Employee::truncate();
        Freedate::truncate();
        Freehour::truncate();
        Reservation::truncate();
        BranchComment::truncate();
        EmployeeComment::truncate();



        DB::table('branch_employee')->truncate();
        DB::table('branch_service')->truncate();
        DB::table('employee_service')->truncate();
        DB::table('workdays')->truncate();


        
        // factory(User::class,  1)->create();

         DB::table('categories')->insert([
            'name'              => 'Barberías',
            'description'       => 'El barbero es una persona cuya ocupación es afeitar, cortar y acondicionar el cabello. Su lugar de trabajo se le conoce como "Barbería" o "Casa del Barbero". Las Barberías eran también lugares de interacción social y discurso público. En algunos casos, las barberías eran también foros públicos. Eran lugares de debates abiertos, servían para expresar la preocupación pública y la participación de los ciudadanos en los debates sobre temas de actualidad. También influyeron en ayudar a formar la identidad masculina.',
            'image'             => 'Barberia.jpg',
        ]);
                            DB::table('services')->insert([
                                'name'              => 'CORTE DE CABELLO',
                                'description'       => 'Lavado - Corte - Secado - Peinado con aplicación de Cera o Gel.',
                                'image'             => 's2.jpg',
                                'price'             => '160',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'CORTE CABELLO JR',
                                'description'       => 'Lavado - Corte - Secado - Peinado con aplicación de gel o cera para juniors',
                                'image'             => 's1.png',
                                'price'             => '120',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'CORTE Y DELINEADO DE BARBA',
                                'description'       => 'Corte de barba  a máquina y tijera - Shaving Cream - Toalla Caliente - Delineado de barba y bigotes - Toalla fría - Aplicación te tónico - Cera para Bigote.',
                                'image'             => 's2.jpg',
                                'price'             => '150',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Corte y Delineado de Bigote',
                                'description'       => 'Recorte bigote a tijera  - Crema pre shave - Toalla Caliente - Delineación con navaja de bigote  - Aplicación te tónico  - Cera para Bigote.',
                                'image'             => 's2.jpg',
                                'price'             => '120',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'AFEITADO CABEZA',
                                'description'       => 'Corte a máquina - Aplicación de crema pre shave - Toalla caliente - Afeitado con navaja y espuma - Toalla fría - Tónico after shave.',
                                'image'             => 's1.png',
                                'price'             => '200',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'CORTE CABELLO CON DISEÑO',
                                'description'       => 'Lavado - Corte - Secado - Peinado con aplicación de gel o cera - Definición de cejas - Corte vello nasal y orejas - Masaje relajante de cuello y hombros',
                                'image'             => 's2.jpg',
                                'price'             => '300',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'CORTE CABELLO - ROYAL',
                                'description'       => 'Lavado - Corte - Secado - Peinado con aplicación de gel o cera - Definición de cejas - Corte vello nasal y orejas - Masaje relajante de cuello y hombros',
                                'image'             => 's2.jpg',
                                'price'             => '200',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'CORTE Y DELINEADO BARBA - ROYAL',
                                'description'       => 'Bolsas de té en los ojos - Corte de barba a maquina y tijera  - Aplicación de Tónico Pre-Shave - Tollas calientes con aromaterapia - Delineado con navaja de bigote y barba - Masaje relajante de cuello y hombros - Toalla Fría con aromaterapia, tónico after shave - Cera para bigote - Definición de cejas - Corte vello nasal y orejas.',
                                'image'             => 's1.png',
                                'price'             => '250',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'CORTE Y DELINADO DE BIGOTE - ROYAL',
                                'description'       => 'Bolsas de té en los ojos - Corte de bigote a tijera - Toalla caliente - Delineación con navaja - Masaje Relajante de hombros y cuello - Toalla fría - Aplicación de Tónico - Cera para bigote - Definición de cejas - Corte vello nasal y orejas.',
                                'image'             => 's1.png',
                                'price'             => '200',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'AFEITADO CABEZA - ROYAL',
                                'description'       => 'Bolsas de té en los ojos - Afeitado a máquina - Loción pre-afeitado - Toallas calientes con aromaterapia - Masaje relajante de hombros y cuello - Afeitado con navaja y espuma - Toalla fría con aromaterapia - Tónico - Alineación de cejas - Corte vello nasal y orejas.',
                                'image'             => 's1.png',
                                'price'             => '150',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'AFEITADO BARBA - ROYAL',
                                'description'       => 'Bolsas de té en los ojos - Afeitado a máquina - Loción pre-afeitado - Toallas calientes con aromaterapia - Masaje relajante homro y brazos - Afeitado con navaja y espuma - Toalla fría con aromaterapia  - Bálsamo after shave - Tónico - Delineación de cejas - Corte vello nasal y orejas.',
                                'image'             => 's2.jpg',
                                'price'             => '200',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'FACIAL EXFOLIANTE',
                                'description'       => 'Tónico limpiador - Crema Exfoliante - Pantalla Solar',
                                'image'             => 's2.jpg',
                                'price'             => '250',
                                'category_id'             => 1,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'TINTE BARBA',
                                'description'       => 'Tinte de Barba Completa.',
                                'image'             => 's2.jpg',
                                'price'             => '300',
                                'category_id'             => 1,
                            ]);




         DB::table('categories')->insert([
            'name'              => 'Estéticas',
            'description'       => 'Sabemos de la importancia que toda mujer le da al siempre lucir bella, Natural e impecable ese día tan especial, para lograr esto, hemos desarrollado todo un abanico propio de productos y servicios que van desde soluciones básicas hasta las más completas e integrales dedicadas al cuidado e imagen de todos nuestros clientes.',
            'image'             => 'esteticas.jpg',
        ]);
                            DB::table('services')->insert([
                                'name'              => 'Tratamientos faciales y corporales',
                                'description'       => 'Todo tipo de masajes para cara o cuerpo con los tratamientos y cosméticos más eficaces que te proporcionan múltiples beneficios (parafangos, colágeno, anticelulíticos, reafirmantes, hidratantes, exfoliantes, etc.).',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'             => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Limpiezas faciales',
                                'description'       => 'Este tratamiento está destinado a limpiar el rostro con el objetivo de eliminar las impurezas de la piel, las células muertas y los famosos puntos negros o comedones.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'             => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Depilación cera ',
                                'description'       => 'Disponemos de las mejores ceras para una depilación temporal del vello rápida y práctica (caliente, tibia, roll on).',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Depilación masculina',
                                'description'       => 'Cada vez son más los hombres que recurren a la depilación para eliminar el antiestético vello de espalda, pecho, piernas, etc. Anímate.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Depilación eléctrica',
                                'description'       => 'Técnica idónea para eliminar el vello de pequeñas zonas (cejas, labio, mentón, etc.) y no provoca manchas. Consiste en pequeñas descargas que llegan hasta el folículo piloso para atrofiar su crecimiento.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Depilación láser',
                                'description'       => 'Depilación definitiva con nuestro láser de DIODO de alta potencia e intensidad.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Manicura',
                                'description'       => 'Todas las técnicas de manicura a tu disposición (tradicional, parafina, francesa, semipermanente, etc.).',
                                'image'             => '',

                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Pedicura',
                                'description'       => 'Además de cortarte y decorarte las uñas, te ofrecemos un relajante masaje de pies y la eliminación de las asperezas, cayos, durezas… Puedes terminar con un magnífico baño de parafina.',
                                'image'             => '',
                                
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Decoloraciones',
                                'description'       => 'Con un suave decolorante aclaramos el vello facial tan molesto (en labio, mentón, pómulos, etc.).',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Maquillajes',
                                'description'       => 'Desde el maquillaje de calle más discreto, hasta el más intenso para tu noche de fiesta, evento o ceremonia.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Micropigmentación',
                                'description'       => 'Técnica empleada para corregir las imperfecciones o el pelo de las cejas de manera definitiva, o para conseguir un perfilado permanente  de los labios.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Moldeador de pestañas',
                                'description'       => 'Con el moldeador conseguimos unas curvatura duradera en tus pestañas para que luzcan mucho más rizadas y se vean perfectas cuando te apliques el rímel.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Tinte de pestañas',
                                'description'       => 'Es la solución perfecta para conseguir unas pestañas con brillo y una mirada más penetrante.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Solarium',
                                'description'       => 'Para conseguir un bronceado natural y poder mantener un aspecto mucho más saludable durante todo el año. Disponemos de equipos de rayos UVA con la última tecnología en tubos radiantes. Solarium vertical y horizontal.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Cortes',
                                'description'       => 'Asesoramiento, diseño y corte de pelo para mujer y hombre, atendiendo a tu estructura facial y a las tendencias más actuales.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Mechas',
                                'description'       => 'Color y vida para tu cabello con mechas zig-zag, flash, californianas, degradadas de color, etc.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Color',
                                'description'       => 'Teñir el cabello en tu casa es un engorro. Nosotros te aconsejamos cuál es el tono más adecuado para ti.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Decoloraciones',
                                'description'       => 'Decolorarte el cabello en tu casa puede ser una pesadilla además de que puedes arruinar tu cabello. Con nuestros productos profesionales podemos aclarar el color de tu cabello hasta 8 tonos.',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);

                            DB::table('services')->insert([
                                'name'              => 'Mantas y extensiones',
                                'description'       => 'Ponemos a tu disposición todo tipo de acabados con mantas y extensiones de cabello natural (mantas, clip, keratina plana, etc.).',
                                'image'             => '',
                                'price'             => '100',
                                'category_id'       => 2,
                            ]);




         DB::table('categories')->insert([
            'name'              => 'Talleres De Perforaciones Corporales',
            'description'       => 'Cualquier persona puede atravesar una aguja en el cuerpo de otro, lo importante es saber cómo y con qué hacerlo para no poner en riesgo al cliente ni al profesional. En el presente taller se abordará la historia de las perforaciones, desde las culturas antiguas hasta su alcance en la cultura contemporánea. En el proceso se revisarán diferentes culturas, costumbres y quiénes fueron los pioneros de las perforaciones contemporáneas.',
            'image'             => 'perforaciones.jpg',
        ]);

                                DB::table('services')->insert([
                                    'name'              => 'Piercing anti-ceja',
                                    'description'       => 'Se trata de una perforación que usualmente se realiza con una barra de superficie encima del hueso del cachete o debajo de la ceja y que puede ser horizontal o vertical. En ocasiones, a este piercing también le llaman “lágrimas”, aunque es más común encontrarlo como anti-ceja.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 3,
                                ]);

                                DB::table('services')->insert([
                                    'name'              => 'Piercing puente',
                                    'description'       => 'Este se ubica en el puente de la nariz, de ahí viene su nombre. Para entenderlo mejor, se coloca entre ambos ojos. También hay quienes lo llaman "Erl" porque según cuentan, el primer hombre que se lo hizo se llamaba Erl Van Aken.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 3,
                                ]);

                                DB::table('services')->insert([
                                    'name'              => 'Piercing del cachete',
                                    'description'       => 'Este penetra la mejilla por completo, llega hasta la cavidad oral y casi siempre se hace de manera simétrica, en ambos lados de la cara. Algunas personas se lo hacen para crear hoyuelos que no tienen naturalmente.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 3,
                                ]);


                                DB::table('services')->insert([
                                    'name'              => 'Piercing en la ceja',
                                    'description'       => 'El piercing en la ceja es el más popular de los piercings en la cara, es uno de los más fáciles de hacer y también de esconder, por ejemplo con el cabello, si es que así se desea. Su nombre lo dice todo, está ubicado en la ceja y puede estar dispuesto en forma transversal a la misma o en forma paralela, habitualmente ubicándose en la parte final de las cejas. Su popularidad se debe a varias razones, entre ellas el hecho de que el lugar hace que la perforación sea casi indolora, es un piercing que generalmente cicatriza rápido y aunque se tenga un año con él, se cierra en poco tiempo y sin dejar ninguna marca considerablemente desagradable.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 3,
                                ]);


                                DB::table('services')->insert([
                                    'name'              => 'Piercing labret',
                                    'description'       => 'El labret se llama así porque está ubicado en el labrum, que es el espacio entre la barbilla y el labio inferior. Los Aztecas y los Mayas que tenían este tipo de piercing eran hombres de altas castas. La localización siempre es esa, pero puede estar en el centro, de un lado, puede ser una joya recta o bien una argolla. Depende del gusto de quien se lo haga.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 3,
                                ]);


                                DB::table('services')->insert([
                                    'name'              => 'Piercing medusa',
                                    'description'       => 'El piercing Medusa es casi igual al labret, solo que se ubica entre la nariz y el labio superior. Además, la joya que se usa tiene forma de barra.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 3,
                                ]);


                                DB::table('services')->insert([
                                    'name'              => 'Piercing Monroe',
                                    'description'       => 'El piercing Monroe se parece al piercing Medusa, solo que en lugar de estar ubicado en el centro, se usa del lado derecho o izquierdo. Se llama así porque fue pensado en honor al lunar de Marilyn Monroe, considerado un fuerte símbolo de la sexualidad. Por esto también se le llama "Madonna" o "Crawford".',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 3,
                                ]);


                                DB::table('services')->insert([
                                    'name'              => 'Piercing nasal',
                                    'description'       => 'El piercing en la nariz también es de los más populares. Existen varios tipos de joyas para usar allí. Pueden ser argollas o solo un puntito en la nariz. Se hace casi siempre de un lado en el cartílago de la nariz.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 3,
                                ]);


                                DB::table('services')->insert([
                                    'name'              => 'Piercing en la lengua',
                                    'description'       => 'El piercing de la lengua, obviamente dentro de la boca, tiene un proceso de curación y ciertos cuidados un tanto complejos.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 3,
                                ]);







                                




        DB::table('categories')->insert([
            'name'              => 'Talleres De Tatuajes',
            'description'       => 'Un tatuaje es una modificación temporal o permanente del color de la piel en el que se crea un dibujo, una figura o un texto y se plasma con agujas u otros utensilios que inyectan tinta o algún otro pigmento bajo la epidermis de una persona.',
            'image'             => 'tataujes.jpg',
        ]);

                                DB::table('services')->insert([
                                    'name'              => 'Minis Tatuajes',
                                    'description'       => 'Un estilo minimalista nunca pasa de moda para aquellos que les gusta lo simple pero elegante.',
                                    'image'             => '',
                                    'price'             => '100',
                                    'category_id'       => 4,
                                
                                ]);


                                     DB::table('services')->insert([
                                    'name'              => 'Tatuajes A Color Standar',
                                    'description'       => 'Los tatuajes full color son bastante populares en el mundillo del tatuaje por sus características y facilidad para adaptarse a cualquier tipo de diseño que deseemos plasmar en nuestra piel.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 4,
                                ]);

                                DB::table('services')->insert([
                                    'name'              => 'Tatuajes Blanco y Negro',
                                    'description'       => 'Si quieres reflejar actitud y estilo los tatuajes a blanco y negro son para ti.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 4,
                                ]);


                                     DB::table('services')->insert([
                                    'name'              => 'Tatuajes Realistas A Color',
                                    'description'       => 'Que la realidad sea parte d etu piel, estos tatuajes son muy realistas, tanto que causarán una gran impresión para quién lo viese.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 4,
                                ]);

                                DB::table('services')->insert([
                                    'name'              => 'Tatuajes Realistas Blanco y Negro',
                                    'description'       => 'Nunca pasan de moda tatauejes a blanco y negro, todo un clásico.',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 4,
                                ]);


                                     DB::table('services')->insert([
                                    'name'              => 'Retoques a Color',
                                    'description'       => 'Nunca está de más fijarse en esos pequeños detalles',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 4,
                                ]);

                                DB::table('services')->insert([
                                    'name'              => 'Retoque Blanco Y Negro',
                                    'description'       => 'Un perqueño detalle es un gran gesto con estos tatuajes',
                                    'image'             => '',
                                'price'             => '100',
                                    'category_id'       => 4,
                                ]);






                                

        DB::table('categories')->insert([
            'name'              => 'Manicuristas',
            'description'       => 'Se llama manicuro,1​ manicura o manicurista2​ a la persona que tiene por ocupación el cuidado y embellecimiento de las manos y en especial, el cuidado y pintura de las uñas. sin contar con muchas otras ocupaciones propias del área.',
            'image'             => 'manicurista.jpg',
        ]);
                DB::table('services')->insert([
                    'name'              => 'Manicure tradicional',
                    'description'       => 'Una manicura es un tratamiento de belleza cosmético para las uñas y manos que suele realizarse en casa o en un salón de belleza. En una manicura se cortan o liman los bordes de las uñas, se realizan masajes a las manos y se aplica esmalte de uñas.',
                    'image'             => '5.png',
                                'price'             => '100',
                    'category_id'       => 5,
                ]);

                DB::table('services')->insert([
                    'name'              => 'Manicure permanente',
                    'description'       => 'El esmaltado permanente es un tipo de técnica en manicura que evita tener que estar pintándose las uñas todas las semanas. Se trata de un tipo de esmalte que se aplica de forma rápida y fácil y que consigue una durabilidad y brillo como si las uñas estuviesen recién pintadas',
                    'image'             => '5.png',
                                'price'             => '100',
                    'category_id'       => 5,
                ]);
                DB::table('services')->insert([
                    'name'              => 'Pedicure tradicional',
                    'description'       => 'Una pedicura es un tratamiento de belleza cosmético para las uñas de los pies  que suele realizarse en casa o en un salón de belleza. En una pedicura se cortan o liman los bordes de las uñas, se realizan masajes a los pies y se aplica esmalte de uñas.',
                    'image'             => '5.png',
                                'price'             => '100',
                    'category_id'       => 5,
                ]);
                DB::table('services')->insert([
                    'name'              => 'Pedicure permanente',
                    'description'       => 'El esmaltado permanente es un tipo de técnica en pedicura que evita tener que estar pintándose las uñas todas las semanas. Se trata de un tipo de esmalte que se aplica de forma rápida y fácil y que consigue una durabilidad y brillo como si las uñas estuviesen recién pintadas',
                    'image'             => '5.png',
                                'price'             => '100',
                    'category_id'       => 5,
                ]);


                                

        DB::table('categories')->insert([
            'name'              => 'Maquillistas',
            'description'       => 'Se denomina maquillador a la persona que tiene como profesión encargarse de aplicar el maquillaje sobre la cara u otras partes del cuerpo a personas que desarrollan su profesión ante el público, tales como las dedicadas al mundo del espectáculo o los medios audiovisuales.',
            'image'             => 'maquillista.jpg',
        ]);

                DB::table('services')->insert([
                    'name'              => 'Maquillaje de novia con prueba de maquillaje incluida',
                    'description'       => '',
                    'image'             => '5.png',
                                'price'             => '100',
                    'category_id'       => 6,
                ]);
                DB::table('services')->insert([
                    'name'              => 'Maquillaje y peinado de novia con ambas pruebas incluidas',
                    'description'       => '',
                    'image'             => '5.png',
                                'price'             => '100',
                    'category_id'       => 6,
                ]);
                DB::table('services')->insert([
                    'name'              => 'Maquillaje de fiesta, invitada o familiares de la novia',
                    'description'       => '',
                    'image'             => '5.png',
                                'price'             => '100',
                    'category_id'       => 6,
                ]);
                DB::table('services')->insert([
                    'name'              => 'Maquillaje y peluquería de fiesta, invitada o familiares',
                    'description'       => '',
                    'image'             => '5.png',
                                'price'             => '100',
                    'category_id'       => 6,
                ]);

                $this->call(RoleTableSeeder::class);
                $this->call(UserTableSeeder::class);
                $this->call(BrandTableSeeder::class);
                $this->call(BrachTableSeeder::class);
                $this->call(EmployeeTableSeeder::class);

                


    }
}
