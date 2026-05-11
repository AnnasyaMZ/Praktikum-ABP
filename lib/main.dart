import 'package:flutter/material.dart';

// 2311102246 - Annasya Maulafidatu Zahra
// Implementasi Material Widget: Card, FloatingActionButton, & SnackBar

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      theme: ThemeData(
        useMaterial3: true,
        colorSchemeSeed:
            Colors.indigo, 
      ),
      home: const MaterialCatalogPage(),
    );
  }
}

class MaterialCatalogPage extends StatelessWidget {
  const MaterialCatalogPage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Material Widget Catalog'),
        centerTitle: true,
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          children: [
           
            Card(
              elevation: 0,
              shape: RoundedRectangleBorder(
                side: BorderSide(color: Theme.of(context).colorScheme.outline),
                borderRadius: const BorderRadius.all(Radius.circular(12)),
              ),
              child: const Padding(
                padding: EdgeInsets.all(16.0),
                child: Column(
                  children: [
                    ListTile(
                      leading: Icon(Icons.info_outline),
                      title: Text('Informasi Tugas'),
                      subtitle: Text(
                        'Mengaplikasikan widget dari katalog Material Flutter.',
                      ),
                    ),
                  ],
                ),
              ),
            ),
            const SizedBox(height: 20),

          
            const Card(
              elevation: 4,
              child: Padding(
                padding: EdgeInsets.all(20.0),
                child: Row(
                  children: [
                    Icon(Icons.star, color: Colors.amber),
                    SizedBox(width: 10),
                    Text(
                      'Widget Terpilih: Material Card',
                      style: TextStyle(fontWeight: FontWeight.bold),
                    ),
                  ],
                ),
              ),
            ),
          ],
        ),
      ),

      floatingActionButton: FloatingActionButton.extended(
        onPressed: () {
          // Menampilkan SnackBar (Widget Material untuk notifikasi singkat)
          ScaffoldMessenger.of(context).showSnackBar(
            const SnackBar(
              content: Text('Berhasil mengaplikasikan Material Widget!'),
              behavior: SnackBarBehavior.floating,
            ),
          );
        },
        label: const Text('Simpan'),
        icon: const Icon(Icons.save),
      ),
    );
  }
}
